<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en" >
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en" >
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>subdee</title>

        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/foundation.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/fc-webicons.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/style.css'); ?>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,400italic&subset=latin,greek' rel='stylesheet' type='text/css'>

        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/vendor/custom.modernizr.js'); ?>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-41574484-1', 'subdee.org');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div class="row">
            <div class="small-12 menu">
                <ul>
                    <li><span id="aboutMe"><a href="#aboutme">About</a></span></li>
                    <li><span id="cv"><a href="#cv">CV</a></span></li>
                    <li><span id="work"><a href="#work">Work</a></span></li>
                    <li><span id="contact"><a href="#contact">Contact</a></span></li>
                    <!--<li><span id="contact">Hmm</span></li>-->
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="small-12 main-content panel radius">
                <h1>Konstantinos Thermos</h1>
                <img src="images/subdee.jpg" alt="me!" />
                <br><br>
                <h3>Web development & more</h3>
                <hr>
                <p>Use the menu above to find out more about the exciting me!</p>
            </div>
            <div class="small-12 main-content minimised panel radius">
                <img src="images/subdee.jpg" alt="me!" />
                <span>Konstantinos Thermos <a href='mailto:info@subdee.org'>info@subdee.org</a></span>
            </div>
        </div>
        <div class="row">
            <div class="small-12 dynamic-content panel radius">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="footer">
            <a class="fc-webicon small bitbucket" href="https://bitbucket.org/subdee">Bitbucket</a>
            <a class="fc-webicon small github" href="https://github.com/subdee">Github</a>
            <a class="fc-webicon small googleplus" href="https://plus.google.com/111998360579814278927/posts">Google+</a>
            <a class="fc-webicon small linkedin" href="http://www.linkedin.com/profile/view?id=18642498">LinkedIn</a>
            <a class="fc-webicon small soundcloud" href="http://soundcloud.com/subdee">SoundCloud</a>
            <a class="fc-webicon small twitter" href="https://twitter.com/_subdee">Twitter</a>
            <span>&copy;2013 Subdee Studio</span>
        </div>
    </body>
</html>
