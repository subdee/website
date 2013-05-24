<script>
    $(function() {
        $(".menu ul li span").click(function() {
            var action = $(this).attr("id");

            $.ajax({
                url: '<?php echo Yii::app()->createUrl('site'); ?>/' + action,
                success: function(data) {
                    if ($(".main-content").css("display") == 'block') {
                        $(".main-content").fadeOut();
                        $(".main-content.minimised").delay(500).fadeIn();
                    }
                    $(".dynamic-content").slideUp(400, function() {
                        $(this).html(data).delay(500).slideDown();
                    });
                },
                beforeSend: function() {
                }
            });
        });

        var h = $(window).height();
        $(".dynamic-content").css({
            maxHeight: h - (h * 0.2)
        });

        var line2 = '<div>or you can sit here and look at my handsome face</div>';
        var line3 = '<div>I see you can\'t get enough of me huh</div>';
        var line4 = '<div>Wanna play a game?</div>';
        var line5 = '<div>I\'m bored</div>';

        setTimeout(function(){
            $(line2).hide().appendTo($(".main-content p")).fadeIn();
        }, 2000);
        setTimeout(function(){
            $(line3).hide().appendTo($(".main-content p")).fadeIn();
        }, 7000);
        setTimeout(function(){
            $(line4).hide().appendTo($(".main-content p")).fadeIn();
        }, 27000);
        setTimeout(function(){
            $(line5).hide().appendTo($(".main-content p")).fadeIn();
        }, 87000);
    })
</script>