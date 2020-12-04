<?php
function paging($total_col, $now_page, $page_col_num, $page_block_num, $total_str){
    $add_str = $total_str;
    $total = $total_col; // 총 컬럼 수
    $page = $now_page; // 현재 페이지
    $page_num = $page_col_num; // 한 페이지 컬럼 수
    $block_num = $page_block_num; // 한 페이지 블럭 수

    $limit_start = $page_num * $page - $page_num; // limit 시작 위치


    $total_page = ceil($total / $page_num); // 총 페이지
    $total_black = ceil($total_page / $block_num); // 총 블럭

    $now_block = ceil($page / $block_num); // 현재 페이지의 블럭
    $start_page = (($now_block * $block_num) - ($block_num - 1)); // 가져올 페이지의 시작번호
    $last_page = ($now_block * $block_num); // 가져올 마지막 페이지 번호

    $prev_page = ($now_block * $block_num) - $block_num; // 이전 블럭 이동시 첫 페이지
    $next_page = ($now_block * $block_num) + 1; // 다음 블럭 이동시 첫 페이지
    /*if($total > 0){
        echo "<a class='wall_paging_style wall_paging' data-page='1'><i class=\"fa fa-step-backward\" aria-hidden=\"true\"></i></a>";
    }else{
        echo "<a class='wall_paging' data-page='1'><i class=\"fa fa-step-backward\" aria-hidden=\"true\"></i></a>";
    }*/

// 이전 페이지
    if ($now_block > 1) {
        echo "<a class='wall_paging_style wall_paging' id='wall_prev' data-page='{$prev_page}'> <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i> </a>";
    }else{
        echo "<span class='wall_paging' id='wall_prev'><i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i></span>";
    }

// echo "이전 페이지 : $prev_page";

// 페이지 리스트
    echo "<span id='wall_paging_num'>";
    if ($last_page < $total_page) {
        $for_end = $last_page;
    } else {
        $for_end = $total_page;
    }
    $index = 1;
    for ($i = $start_page; $i <= $for_end; $i++) {
        if ($page == $i) {
            echo "<a class='wall_paging_style wall_paging select_paging' id='wall_page{$index}' data-page='{$i}'> $i </a>";
        }else{
            echo "<a class='wall_paging_style wall_paging' id='wall_page{$index}' data-page='{$i}'> $i </a>";
        }
        $index++;
    }
    echo "</span>";
// 다음 페이지
    if ($now_block < $total_black) {
        echo "<a class='wall_paging_style wall_paging' id='wall_next' data-page='{$next_page}'> <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i> </a>";
    }else{
        echo "<span class='wall_paging' id='wall_next'><i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></span>";
    }
// echo "다음 페이지 : $next_page";
    /*if($total > 0){
        echo "<a class='wall_paging_style wall_paging' data-page='{$total_page}'><i class=\"fa fa-step-forward\" aria-hidden=\"true\"></i></a>";
    }else{
        echo "<a class='wall_paging' data-page='{$total_page}'><i class=\"fa fa-step-forward\" aria-hidden=\"true\"></i></a>";
    }*/

}
?>