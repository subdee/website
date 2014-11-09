<script>
    $(function() {
        $(".menu ul li span").on("click", "a", function() {
            var action = $(this).parent().attr("id");

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

        if (window.location.hash) {
            var hash = window.location.hash.substring(1);
            if (hash === "aboutme") {
                $(".menu ul li span#aboutme a").trigger("click");
            } else if (hash === "cv") {
                $("span#cv a").trigger("click");
            } else if (hash === "work") {
                $("span#work a").trigger("click");
            } else if (hash === "contact") {
                $("span#contact a").trigger("click");
            }
        }
    })
</script>