
;(function ($) {
    'use strict';

    $.fn.waterwheelCarousel = function (startingOptions) {

        // 동일한 선택기 그룹에서 여러 개의 회전식 컨센서스를 초기화하는 기능을 추가합니다.
        if (this.length > 1) {
            this.each(function() {
                $(this).waterwheelCarousel(startingOptions);
            });
            return this; // 연쇄를 허용하다
        }

        var carousel = this;
        var options = {};
        var data = {};

        function initializeCarouselData() {
            data = {
                itemsContainer:         $(carousel),
                totalItems:             $(carousel).find('img').length,
                containerWidth:         $(carousel).width(),
                containerHeight:        $(carousel).height(),
                currentCenterItem:      null,
                previousCenterItem:     null,
                items:                  [],
                calculations:           [],
                carouselRotationsLeft:  0,
                currentlyMoving:        false,
                itemsAnimating:         0,
                currentSpeed:           options.speed,
                intervalTimer:          null,
                currentDirection:       'forward',
                leftItemsCount:         0,
                rightItemsCount:        0,
                performingSetup:        true
            };
            data.itemsContainer.find('img').removeClass(options.activeClassName);
        }

        /**
         * 이 기능은 캐 러셀에 대한 자동 재생을
         * 설정하여 옵션에서 시간을 자동으로 회전시킵니다.
         * 참으로 전달하여 자동 재생을 지울 수 있습니까?
         */
        function autoPlay(stop) {
            // clear timer
            clearTimeout(data.autoPlayTimer);
            // 정지 명령이 없으면 자동 재생이 0으로 설정되지 않습니다.
            if (!stop && options.autoPlay !== 0) {
                // set timer...
                data.autoPlayTimer = setTimeout(function () {
                    // 어느 방향 으로든 캐 러셀을 움직이려면 ...
                    if (options.autoPlay > 0) {
                        moveOnce('forward');
                    } else {
                        moveOnce('backward');
                    }
                }, Math.abs(options.autoPlay));
            }
        }

        /**
         * 이 함수는 전달 된 콜백 함수를 호출하기 전에 캐 러셀에있는 모든 이미지를 미리로드합니다.
         * 이것은 우리가 항목의 너비와 높이를 적절하게 결정할 수있을 때만 사용됩니다.
         * 대신 사용자가 직접 정보를 지정하는 경우에는 필요하지 않습니다.
         */
        function preload(callback) {
            if (options.preloadImages === false) {
                callback();
                return;
            }

            var $imageElements = data.itemsContainer.find('img'), loadedImages = 0, totalImages = $imageElements.length;

            $imageElements.each(function () {
                $(this).bind('load', function () {
                    // 로드 된 이미지 수에 추가하고 아직 완료되었는지 확인하십시오.
                    loadedImages += 1;
                    if (loadedImages === totalImages) {
                        // 모두 완료, 콜백 수행
                        callback();
                        return;
                    }
                });
                // 로드 이벤트를 발생 시키려면 src를 수동으로 재설정해야 할 수도 있습니다.
                // http://stackoverflow.com/questions/7137737/ie9-problems-with-jquery-load-event-not-firing
                $(this).attr('src', $(this).attr('src'));

                // 브라우저가 이미지를 캐시하면 트리거를 호출 할 수 없습니다. 이것을 감지하고 스스로해라.
                if (this.complete) {
                    $(this).trigger('load');
                }
            });
        }

        /**
         * 회전식 캐러셀에있는 모든 항목의 원래 너비와 높이를 기록합니다.
         * 캐러셀을 다시 초기화하면이 값을 사용하여 원래 크기를 다시 설정할 수 있습니다.
         */
        function setOriginalItemDimensions() {
            data.itemsContainer.find('a').each(function () {
                if ($(this).data('original_width') == undefined || options.forcedImageWidth > 0) {
                    $(this).data('original_width', $(this).width());
                }
                if ($(this).data('original_height') == undefined || options.forcedImageHeight > 0) {
                    $(this).data('original_height', $(this).height());
                }
            });
        }

        /**
         * 사용자는 모든 이미지에 적용해야 할 특정 너비와 높이를 전달할 수 있습니다.
         * 이 옵션은 이미지 프리 로더와 함께 사용할 수 있지만
         * 프리 로더가 꺼져 있고 CSS의 이미지에 정의 된 치수가없는 경우에 사용됩니다.
         * 회전식 캐 러셀은 제대로 작동하기 위해 어느 방향으로나 다른 차원을 필요로합니다.
         */
        function forceImageDimensionsIfEnabled() {
            if (options.forcedImageWidth && options.forcedImageHeight) {
                data.itemsContainer.find('a').each(function () {
                    $(this).width(options.forcedImageWidth);
                    $(this).height(options.forcedImageHeight);
                });
            }
        }

        /**
         * 각 "보이는"항목 슬롯 (옆에있는 항목과 중간에있는 숫자)에 대해
         * 우리는 해당 슬롯을 차지하는 동안 항목이 소유해야하는 모든 속성을 미리 계산합니다.
         * 이렇게하면 실제 애니메이션을하는 동안 시간을 ​​절약 할 수 있습니다.
         */
        function preCalculatePositionProperties() {
            // 0 색인은 캐 러셀의 가운데 항목입니다.
            var $firstItem = data.itemsContainer.find('a:first');
            data.calculations[0] = {
                distance: 0,
                offset:   0,
                opacity:  1
            }

            // 그런 다음 옆에있는 각 항목 수 (더하기 하나 더, 아래 참조)에 대해
            // 사용자 옵션을 기반으로 계산을 수행하십시오.
            var horizonOffset = options.horizonOffset;
            var separation = options.separation;
            for (var i = 1; i <= options.flankingItems + 2; i++) {
                if (i > 1) {
                    horizonOffset *= options.horizonOffsetMultiplier;
                    separation *= options.separationMultiplier;
                }
                data.calculations[i] = {
                    distance: data.calculations[i-1].distance + separation,
                    offset:   data.calculations[i-1].offset + horizonOffset,
                    opacity:  data.calculations[i-1].opacity * options.opacityMultiplier
                }
            }
            // 우리는 위의 계산 중 추가로 1 세트를 수행
            //(측면에있는 항목의 수를 기준으로) 시야에서 벗어나 움직여서 정상적으로 움직입니다.
            // 그러나, 우리는 그것들을 숨겨진 것에 애니메이트 할 필요가 있기 때문에, 불투명도를 0으로 설정합니다.
            // 그 마지막 항목
            if (options.edgeFadeEnabled) {
                data.calculations[options.flankingItems+1].opacity = 0;
            } else {
                data.calculations[options.flankingItems+1] = {
                    distance: 0,
                    offset: 0,
                    opacity: 0
                }
            }
        }

        /**
         * 여기에서는 기본 CSS 속성 설정과 같은 캐 러셀 및 항목을 준비합니다.
         * 모든 항목은 기본적으로 중간 위치에서 시작하여 첫 번째 애니메이션이 진행되는 동안 거기에서 "팬 아웃"됩니다.
         */
        function setupCarousel() {
            // 모든 이미지의 jQuery 객체로 데이터 배열을 채 웁니다.
            data.items = data.itemsContainer.find('a');
            for (var i = 0; i < data.totalItems; i++) {
                data.items[i] = $(data.items[i]);
            }

            //자동으로 설정된 경우 지평선을 설정해야 할 수도 있습니다.
            if (options.horizon === 0) {
                if (options.orientation === 'horizontal') {
                    options.horizon = data.containerHeight / 2;
                } else {
                    options.horizon = data.containerWidth / 2;
                }
            }

            // 모든 항목을 가운데 위치로 기본값 설정
            data.itemsContainer
                .css('position','relative')
                .find('a')
                .each(function () {
                    // 센터의 상단 및 왼쪽 위치가 있어야하는 위치 파악
                    var centerPosLeft, centerPosTop;
                    if (options.orientation === 'horizontal') {
                        centerPosLeft = (data.containerWidth / 2) - ($(this).data('original_width') / 2);
                        centerPosTop = options.horizon - ($(this).data('original_height') / 2);
                    } else {
                        centerPosLeft = options.horizon - ($(this).data('original_width') / 2);
                        centerPosTop = (data.containerHeight / 2) - ($(this).data('original_height') / 2);
                    }
                    $(this)
                    // 이미지에 위치 지정 및 레이어 적용
                        .css({
                            'left': centerPosLeft,
                            'top': centerPosTop,
                            'visibility': 'visible',
                            'position': 'absolute',
                            'z-index': 0,
                            'opacity': 0,
                            'transform':'translateX(-50%)',
                            'transition':'height .3s ease-in-out, width .3s ease-in-out, top .3s ease-in-out'
                        })
                        // 각 이미지에 데이터 개체를 지정하여 특정 데이터를 기억하십시오.
                        // 아것은 원래 형태이다.
                        .data({
                            top:             centerPosTop,
                            left:            centerPosLeft,
                            oldPosition:     0,
                            currentPosition: 0,
                            depth:           0,
                            opacity:         0,
                            transform: 'translateX(-50%)',
                            transition : 'height .3s ease-in-out, width .3s ease-in-out, top .3s ease-in-out'
                        })
                        // 이미지가 설정되었습니다. 이제 보여 드리겠습니다.
                        .show();
                });
        }

        /**
         * 가운데 항목의 왼쪽과 오른쪽에있는 모든 항목은 시작 위치로 애니메이션을 적용해야합니다.
         * 이 함수는 아이템이 어디로 이동하고 거기에 움직 이도록 할 것인지를 결정합니다.
         */
        function setupStarterRotation() {
            options.startingItem = (options.startingItem === 0) ? Math.round(data.totalItems / 2) : options.startingItem;

            data.rightItemsCount = Math.ceil((data.totalItems-1) / 2);
            data.leftItemsCount = Math.floor((data.totalItems-1) / 2);

            // 우리는 사실상 회전 목마를 돌리고 있으므로 우리는 그것을 설정해야합니다.
            data.carouselRotationsLeft = 1;

            // Center item
            moveItem(data.items[options.startingItem-1], 0);
            data.items[options.startingItem-1].css('opacity', 1);

            // 센터 오른쪽에있는 모든 항목
            var itemIndex = options.startingItem - 1;
            for (var pos = 1; pos <= data.rightItemsCount; pos++) {
                (itemIndex < data.totalItems - 1) ? itemIndex += 1 : itemIndex = 0;

                data.items[itemIndex].css('opacity', 1);
                moveItem(data.items[itemIndex], pos);
            }

            // 센터 왼쪽의 모든 항목
            var itemIndex = options.startingItem - 1;
            for (var pos = -1; pos >= data.leftItemsCount*-1; pos--) {
                (itemIndex > 0) ? itemIndex -= 1 : itemIndex = data.totalItems - 1;

                data.items[itemIndex].css('opacity', 1);
                moveItem(data.items[itemIndex], pos);
            }
        }

        /**
         * 항목과 위치가 주어지면이 함수는 해당 항목의 새 데이터를 계산합니다.
         * 계산이 완료되면 해당 데이터를 항목 데이터 객체에 저장합니다.
         */
        function performCalculations($item, newPosition) {
            var newDistanceFromCenter = Math.abs(newPosition);

            // 중심까지의 거리
            if (newDistanceFromCenter < options.flankingItems + 1) {
                var calculations = data.calculations[newDistanceFromCenter];
            } else {
                var calculations = data.calculations[options.flankingItems + 1];
            }

            var distanceFactor = Math.pow(options.sizeMultiplier, newDistanceFromCenter)
            var newHeight;
            var newWidth;
            if(distanceFactor == 1){
                newWidth = distanceFactor * $item.data('original_width') -40;
                newHeight = distanceFactor * $item.data('original_height') -40;
            }else{
                newWidth = $item.data('original_width') -40;
                newHeight = $item.data('original_height') -40;
            }
            //var newWidth = distanceFactor * $item.data('original_width');
            //var newHeight = distanceFactor * $item.data('original_height');

            var widthDifference = Math.abs($item.width() - newWidth);
            var heightDifference = Math.abs($item.height() - newHeight);

            var newOffset = calculations.offset
            var newDistance = calculations.distance;
            if (newPosition < 0) {
                newDistance *= -1;
            }

            if (options.orientation == 'horizontal') {
                var center = data.containerWidth / 2;
                var basic = 50;
                var perDepth = 8;
                //var newLeft = center + newDistance - (newWidth / 2);
                var newLeft = basic + (perDepth * newPosition);
                var newTop = options.horizon - newOffset - (newHeight / 2);
            } else {
                var center = data.containerHeight / 2;
                var newLeft = options.horizon - newOffset - (newWidth / 2);
                var newTop = center + newDistance - (newHeight / 2);
            }

            var newOpacity,newDeg;
            if (newPosition === 0) {
                newOpacity = 1;
            } else {
                //newOpacity = calculations.opacity;
                newOpacity = 1;
            }
            // 깊이는 중심에서 역방향 거리가됩니다.
            var newDepth = options.flankingItems + 2 - newDistanceFromCenter;


            $item.data('width',newWidth);
            $item.data('height',newHeight);
            $item.data('top',newTop);
            $item.data('left',newLeft+'%');
            $item.data('transform','translateX(-'+newLeft+'%)');
            $item.data('transition','height .3s ease-in-out, width .3s ease-in-out, top .3s ease-in-out');
            $item.data('oldPosition',$item.data('currentPosition'));
            $item.data('depth',newDepth);
            $item.data('opacity',newOpacity);
        }

        function moveItem($item, newPosition) {
            // 항목이 경계 내에있는 경우에만 항목을 물리적으로 이동하려고합니다.
            // 또는 경계 바로 바깥 쪽의 첫 번째 위치
            if (Math.abs(newPosition) <= options.flankingItems + 1) {

                performCalculations($item, newPosition);
                data.itemsAnimating++;
                console.log($item.data());
                $item
                    .css('z-index',$item.data().depth).css('transform',$item.data().transform).css('transition',$item.data().transition)
                    // 항목을 새로운 위치 값에 애니메이션으로 지정합니다.
                    .animate({
                        left:    $item.data().left,
                        width:   $item.data().width,
                        height:  $item.data().height,
                        top:     $item.data().top,
                        opacity: $item.data().opacity
                    }, data.currentSpeed, options.animationEasing, function () {
                        // 항목의 애니메이션이 끝났습니다. 메소드 호출
                        itemAnimationComplete($item, newPosition);
                    });

            } else {
                $item.data('currentPosition', newPosition)
                // 아직 이동하지 않은 경우 항목을 '숨김'위치로 이동합니다.
                // 이것은 초기 설치를위한 것입니다.
                if ($item.data('oldPosition') === 0) {
                    $item.css({
                        'left':    $item.data().left,
                        'width':   $item.data().width,
                        'height':  $item.data().height,
                        'top':     $item.data().top,
                        'opacity': $item.data().opacity,
                        'z-index': $item.data().depth,
                        'transform' : $item.data().transform,
                        'transform' : $item.data().transition
                    });
                }
            }

        }

        /**
         * 이 함수는 항목의 지정된 위치에 애니메이션 효과가 완료되면 호출됩니다.
         * 애니메이션 대기열 처리와 같은 여러 가지 다른 명령문이 여기서 실행됩니다.
         */
        function itemAnimationComplete($item, newPosition) {
            data.itemsAnimating--;

            $item.data('currentPosition', newPosition);

            // 어떤 품목이 왔는지, 중심 위치를 벗어 났는지 추적하십시오.
            // 모든 회전이 완료되면 콜백을 시작할 수 있습니다.
            if (newPosition === 0) {
                data.currentCenterItem = $item;
            }

            // 모든 항목의 순환 게재가 완료되고 정리가 완료됩니다.
            if (data.itemsAnimating === 0) {
                data.carouselRotationsLeft -= 1;
                data.currentlyMoving = false;

                // 대기열에 아직 회전이 남아 있으면 회전식을 다시 회전합니다.
                // 우리는 추가 회전을 추가하고 싶지 않기 때문에 0으로 전달합니다.
                if (data.carouselRotationsLeft > 0) {
                    rotateCarousel(0);
                    // 그렇지 않으면 더 이상 회전이없고 ...
                } else {
                    // 회전식 캐러셀의 속도를 원본으로 재설정하십시오.
                    data.currentSpeed = options.speed;

                    data.currentCenterItem.addClass(options.activeClassName);

                    if (data.performingSetup === false) {
                        options.movedToCenter(data.currentCenterItem);
                        options.movedFromCenter(data.previousCenterItem);
                    }

                    data.performingSetup = false;
                    // 자동 실행 재설정 및 초기화
                    autoPlay();
                }
            }
        }

        /**
         주어진 방향에서 회전 수를 회전시키기 위해 호출되는 함수.
         캐러셀이 움직일 수 있는지 확인한 다음 속도를 조정하고 항목을 이동합니다.
         */
        function rotateCarousel(rotations) {
            // 회전 허용 여부를 확인하십시오.
            if (data.currentlyMoving === false) {

                // 회전하는 동안 가운데 항목에서 활성 클래스 제거
                data.currentCenterItem.removeClass(options.activeClassName);

                data.currentlyMoving = true;
                data.itemsAnimating = 0;
                data.carouselRotationsLeft += rotations;

                if (options.quickerForFurther === true) {
                    // 회전 목마가 얼마나 빨리 회전해야하는지 파악합니다.
                    if (rotations > 1) {
                        data.currentSpeed = options.speed / rotations;
                    }
                    // 이상한 결과를 피하려면 속도가 최소 이상이어야합니다.
                    data.currentSpeed = (data.currentSpeed < 100) ? 100 : data.currentSpeed;
                }

                // 각 항목을 반복하고 이동하십시오.
                for (var i = 0; i < data.totalItems; i++) {
                    var $item = $(data.items[i]);
                    var currentPosition = $item.data('currentPosition');

                    var newPosition;
                    if (data.currentDirection == 'forward') {
                        newPosition = currentPosition - 1;
                    } else {
                        newPosition = currentPosition + 1;
                    }
                    // 순환 회전을 가능하게하기 위해 가능한 한 양쪽을 유지합니다.
                    // 현재 위치를 무효화하여 상대방에게 arround 항목을 "래핑"합니다.
                    var flankingAllowance = (newPosition > 0) ? data.rightItemsCount : data.leftItemsCount;
                    if (Math.abs(newPosition) > flankingAllowance) {
                        newPosition = currentPosition * -1;
                        // 균등하지 않은 수의 '측면'항목이있는 경우이를 보상해야합니다.
                        // 우리가 항목 스위치면. 이 경우 오른쪽에는 항상 1이 더 있습니다.
                        if (data.totalItems % 2 == 0) {
                            newPosition += 1;
                        }
                    }

                    moveItem($item, newPosition);
                }
            }
        }

        /**
         * 캐러셀 내의 이미지를 클릭하면 이벤트 핸들러이 기능은
         * 캐러셀에 올바른 회전 수를 회전시켜 클릭 된 항목을 중앙으로 가져 오거나,
         * 중앙 항목이 클릭 된 경우 사용자가 전달한 사용자 정의 이벤트를 시작합니다
         */
        $(this).find('a').bind("click", function () {
            var itemPosition = $(this).data().currentPosition;

            if (options.imageNav == false) {
                return;
            }
            // 숨겨진 항목을 클릭하지 못하게하십시오.
            if (Math.abs(itemPosition) >= options.flankingItems + 1) {
                return;
            }
            // 회전식 캐러셀이 이미 움직이고 있다면 아무 것도하지 마라.
            if (data.currentlyMoving) {
                return;
            }

            data.previousCenterItem = data.currentCenterItem;

            // 자동 재생 삭제
            autoPlay(true);
            options.autoPlay = 0;

            var rotations = Math.abs(itemPosition);
            if (itemPosition == 0) {
                options.clickedCenter($(this));
            } else {
                // '움직이는'콜백을 시작합니다.
                options.movingFromCenter(data.currentCenterItem);
                options.movingToCenter($(this));
                if (itemPosition < 0) {
                    data.currentDirection = 'backward';
                    rotateCarousel(rotations);
                } else if (itemPosition > 0) {
                    data.currentDirection = 'forward';
                    rotateCarousel(rotations);
                }
            }
        });


        /**
         * 사용자는 링크 태그 인 이미지를 래핑하도록 선택할 수 있습니다.
         * 그들이 그렇게한다면, 우리는 그들이 특정 상황에 대해 활동적이지 않은지 확인해야합니다
         */
        $(this).find('a').bind("click", function (event) {
            var isCenter = $(this).find('img').data('currentPosition') == 0;
            // should we disable the links?
            if (options.linkHandling === 1 || // turn off all links
                (options.linkHandling === 2 && !isCenter)) // turn off all links except center
            {
                event.preventDefault();
                return false;
            }
        });

        function nextItemFromCenter() {
            var $next = data.currentCenterItem.next();
            if ($next.length <= 0) {
                $next = data.currentCenterItem.parent().children().first();
            }
            return $next;
        }

        function prevItemFromCenter() {
            var $prev = data.currentCenterItem.prev();
            if ($prev.length <= 0) {
                $prev = data.currentCenterItem.parent().children().last();
            }
            return $prev;
        }

        /**
         * 어느 방향 으로든 회전 목마를 움직이십시오. '움직이는'콜백을 시작합니다.
         */
        function moveOnce(direction) {
            if (data.currentlyMoving === false) {
                data.previousCenterItem = data.currentCenterItem;

                options.movingFromCenter(data.currentCenterItem);
                if (direction == 'backward') {
                    options.movingToCenter(prevItemFromCenter());
                    data.currentDirection = 'backward';
                } else if (direction == 'forward') {
                    options.movingToCenter(nextItemFromCenter());
                    data.currentDirection = 'forward';
                }
            }

            rotateCarousel(1);
        }

        /**
         * 화살표 키를 사용한 탐색
         */
        $(document).keydown(function(e) {
            if (options.keyboardNav) {
                // 왼쪽 또는 위로 화살표
                if ((e.which === 37 && options.orientation == 'horizontal') || (e.which === 38 && options.orientation == 'vertical')) {
                    autoPlay(true);
                    options.autoPlay = 0;
                    moveOnce('backward');
                    // 오른쪽 또는 아래쪽 화살표
                } else if ((e.which === 39 && options.orientation == 'horizontal') || (e.which === 40 && options.orientation == 'vertical')) {
                    autoPlay(true);
                    options.autoPlay = 0;
                    moveOnce('forward');
                }
                // 화살표 키의 일반적인 기능을 무시해야합니까?
                if (options.keyboardNavOverride && (
                        (options.orientation == 'horizontal' && (e.which === 37 || e.which === 39)) ||
                        (options.orientation == 'vertical' && (e.which === 38 || e.which === 40))
                    )) {
                    e.preventDefault();
                    return false;
                }
            }
        });

        /**
         * Public API methods
         */
        this.reload = function (newOptions) {
            if (typeof newOptions === "object") {
                var combineDefaultWith = newOptions;
            } else {
                var combineDefaultWith = {};
            }
            options = $.extend({}, $.fn.waterwheelCarousel.defaults, newOptions);

            initializeCarouselData();
            data.itemsContainer.find('a').hide();
            forceImageDimensionsIfEnabled();

            preload(function () {
                setOriginalItemDimensions();
                preCalculatePositionProperties();
                setupCarousel();
                setupStarterRotation();
            });
        }

        this.next = function() {
            autoPlay(true);
            options.autoPlay = 0;

            moveOnce('forward');
        }
        this.prev = function () {
            autoPlay(true);
            options.autoPlay = 0;

            moveOnce('backward');
        }

        this.reload(startingOptions);

        return this;
    };

    $.fn.waterwheelCarousel.defaults = {
        // appeeance를 변경할 수있는 트위 크
        startingItem:               1,   // 항목을 회전 목마의 가운데에 배치합니다. 자동으로 0으로 설정
        separation:                 60, // 회전 목마의 항목 간 거리
        separationMultiplier:       1, // 각 추가 항목에 대한 거리를 늘리거나 줄이는 분리 거리를 곱한 값
        horizonOffset:              0,   // "수평선"의 각 항목을이 양만큼 오프셋합니다 (아치를 만듭니다).
        horizonOffsetMultiplier:    1,   // 수평 항목 오프셋을 곱하여 각 추가 항목에 대한 오프셋을 늘리거나 줄입니다.
        sizeMultiplier:             0.7, // 각 항목의 크기가 얼마나 크게 변경되는지 결정합니다.
        opacityMultiplier:          1, // 각 항목의 불투명도가 얼마나 크게 변경되는지 결정합니다.
        horizon:                    0,   // 얼마나 멀리 수평선 / 수직선이 컨테이너 벽에서 설정되어야하는지. 자동 0
        flankingItems:              3,   // 중앙의 양측에 보이는 항목의 수

        // animation
        speed:                      400,      // 속도를 밀리 초 단위로 회전하면 다음부터 차례대로 회전합니다.
        animationEasing:            'linear', // 애니메이션 효과를 사용할 때 사용하는 여유 효과
        quickerForFurther:          false,     // 중심에서 멀리 떨어진 항목을 클릭하면 애니메이션을 더 빠르게 만들려면 true로 설정하십시오.
        edgeFadeEnabled:            false,    // 사실 일 때, 항목은 가장자리에 도달 할 때 아무 것도 보이지 않게됩니다. 그 (것)들을 센터 이미지의 뒤에 움직 이도록 허위

        // misc
        linkHandling:               2,                 // 1을 사용하여 모두 비활성화 (Facebox에 사용), 2를 제외한 모든 작업을 사용 안 함으로 설정 (이미지 연결)
        autoPlay:                   0,                 // 자동 회전 전에 대기 할 속도를 밀리 초 단위로 나타냅니다. 0을 누르면 꺼집니다. 부정적인 수 있습니다.
        orientation:                'horizontal',      // 회전 목마가 '수평'인지 '수직'인지를 나타냅니다.
        activeClassName:            'carousel-center', // 센터의 현재 항목에 주어진 클래스의 이름
        keyboardNav:                false,             // true로 설정하여 회전 키를 화살표 키로 움직입니다.
        keyboardNavOverride:        true,              // 화살표 키의 일반적인 기능을 무시하려면 true로 설정하십시오 (스크롤 금지).
        imageNav:                   true,              // 중심이 아닌 이미지를 클릭하면 해당 이미지가 가운데로 회전합니다.

        // preloader
        preloadImages:              true,  // 이미지 프리 로더를 활성화 / 비활성화합니다.
        forcedImageWidth:           400,     // 모든 이미지의 너비를 지정하십시오; 그렇지 않으면 회전 목마는 그것을 계산하려고합니다.
        forcedImageHeight:          400,     // 모든 이미지의 높이를 지정하십시오; 그렇지 않으면 회전 목마는 그것을 계산하려고합니다.

        // callback functions
        movingToCenter:             $.noop, // 항목이 가운데 위치로 옮길 때 발사 됨
        movedToCenter:              $.noop, // 항목 이동이 완료되면 발사
        clickedCenter:              $.noop, // 가운데 항목을 클릭하면 시작됩니다.
        movingFromCenter:           $.noop, // 항목이 가운데 위치를 벗어날 때 시작됩니다.
        movedFromCenter:            $.noop  // 아이템이 센터에서 이동을 끝내면 발사된다.
    };

})(jQuery);
