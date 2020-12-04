
<script>
    $(function(){
        $("#mo_menu").click(function(){
            if($("#burgur").hasClass('on')){
                $("#burgur").removeClass('on');
                $("#mo_menu_box").fadeOut();
            }else{
                $("#burgur").addClass('on');
                $("#mo_menu_box").fadeIn();
            }
        });
        

    });
</script>