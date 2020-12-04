/*chkSubmit(유효성 체크 대상, 메시지 내용)*/
function chkSubmit(v_item, v_msg){
    if(v_item.val().replace(/\s/g,"")=="") {
        alert(v_msg);
        v_item.val("");
        v_item.focus();
        return false;
    } else {				// 비어있지 않은 경우.
        return true;
    }
}
function wall_paging(page,block,scale,total){
    var total_page = Math.ceil(total / scale); // 총 페이지
    var total_block = Math.ceil(total_page / block); // 총 블럭
    var now_block  = Math.ceil(page / block);
    var start_page = ((now_block * block) - (block -1));
    var last_page  = (now_block * block);
    var index = 1;
    var prev_page = (now_block * block) - block; // 이전 블럭 이동시 첫 페이지
    var next_page = (now_block * block) + 1; // 다음 블럭 이동시 첫 페이지
    var for_end = 0;
    if (last_page < total_page) {
        for_end = last_page;
    } else {
        for_end = total_page;
    }
    $(".paging").html("");
    var page_append = "";
    //page_append += "<a class='wall_paging_style wall_paging' data-page='1'><i class=\"fa fa-step-backward\" aria-hidden=\"true\"></i></a>";
    if (now_block > 1) {
        page_append += "<a class='wall_paging_style wall_paging' id='wall_prev' data-page='"+prev_page+"'> <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i> </a>";
    }else{
        page_append += "<span class='wall_paging' id='wall_prev'><i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i></span>";
    }

    for(var i = start_page;i <= for_end;i++){
        if(page == i){
            page_append += "<a class='wall_paging_style wall_paging select_paging' id='wall_page" + index+ "' data-page='"+ i +"'> " + i + "</a>";
        }else{
            page_append += "<a class='wall_paging_style wall_paging' id='wall_page" + index+ "' data-page='"+ i +"'> " + i + "</a>";
        }
        index++;
    }
    if (now_block < total_block) {
        page_append += "<a class='wall_paging_style wall_paging' id='wall_next' data-page='"+next_page+"'> <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i> </a>";
    }else{
        page_append += "<span class='wall_paging' id='wall_next'><i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></span>";
    }
    //page_append += "<a class='wall_paging_style wall_paging' data-page='"+total_page+"'><i class=\"fa fa-step-forward\" aria-hidden=\"true\"></i></a>";
    $(".paging").append(page_append);
}

function pop_alert(msg){
    $(".alert_content").html(msg);
    $(".alert_mask").css('display','flex');
}


var extendFunction = {
    test1 : function(message) {
        alert(message);
    },
    test2 : function(message) {
        console.log(message);
    }
}

function Encrypt(theText) {
    output = new String;
    Temp = new Array();
    Temp2 = new Array();
    TextSize = theText.length;
    for (i = 0; i < TextSize; i++) {
        rnd = Math.round(Math.random() * 122) + 68;
        Temp[i] = theText.charCodeAt(i) + rnd;
        Temp2[i] = rnd;
    }
    for (i = 0; i < TextSize; i++) {
        output += String.fromCharCode(Temp[i], Temp2[i]);
    }
    return output;
}

function Decrypt(theText) {
    output = new String;
    Temp = new Array();
    Temp2 = new Array();
    TextSize = theText.length;
    for (i = 0; i < TextSize; i++) {
        Temp[i] = theText.charCodeAt(i);
        Temp2[i] = theText.charCodeAt(i + 1);
    }
    for (i = 0; i < TextSize; i = i + 2) {
        output += String.fromCharCode(Temp[i] - Temp2[i]);
    }
    return output;
}

