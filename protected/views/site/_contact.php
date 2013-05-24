<p>There are many ways to find me! You can:</p>
<p>
    - <a href="tel:+31682009216">Call me at +31 68 2009216</a>
</p>
<p>
    - <a href="mailto:info@subdee.org">Email me!</a>
</p>
<p>
    - Use one of the social icons on the bottom to find me
</p>
<p>Or if you get your groove on by filling forms, here is one for you:</p>
<form id="contact-form">
    <div class="row">
        <div class="small-8">
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Your name?</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="name" placeholder="I am really interested">
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">Your email address?</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" id="right-label" name="imail" placeholder="in what you have to tell me">
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <label for="right-label" class="right inline">So tell me about it</label>
                </div>
                <div class="small-9 columns">
                    <textarea id="right-label" name="message" placeholder="so go ahead and tell me!"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="small-offset-9 small-3 columns">
                    <button type="submit" class="button postfix">Off you go!</button>
                </div>
            </div>
        </div>
    </div>
    <input type="text" name="email" id="krimeno" />
</form>
<div class="row">
    <div class="small-offset-4 small-4 result"></div>
</div>
<script>
    $(function(){
        $("#contact-form").submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();
            console.log(data);
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('site/contact'); ?>',
                data: data,
                type: 'post',
                success: function(data) {
                    $(".result").html(data).delay(200).fadeIn().delay(3000).fadeOut();
                }
            });
        });
    })
</script>