<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>LSRE-<?php echo $Title ?></title>
        <link rel="stylesheet" href="CSS/responsive.css">
        <script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="JS/jquery.slides.min.js"></script>
        <script src="JS/jssor.slider-22.1.8.min.js"></script>
        <script src="JS/nav.js"></script>
        <script>
            jQuery(document).ready(function () {
                var options = { $AutoPlay: true };
                var jssor_slider1 = new $JssorSlider$('slider1_container', options);
            });
        </script>
    </head>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <header>
            <img id="banner" src="Images/banner.jpg" alt="banner">
        </header>
        <img id="hamburger" src="Images/hamburger-menu-icon_248276.png" alt="menu icon">
        <nav>
            <ul>
                <?php echo $NavView->output() ?>
            </ul>
        </nav>
        <main>
            <?php echo $Content?>
        </main>
        <footer>
            <div class="fb-like" data-href="https://www.facebook.com/search/top/?q=lake%20spokane%20real%20estate" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            <div id="logoWrap">
                <img class="logo" src="Images/realtor.gif" alt="Realtor Logo">
                <img class="logo" src="Images/mls.gif" alt="MLS Logo">
                <img class="logo" src="Images/a.jpg" alt="EEH Logo">
            </div>
            <div class="left">
                <span id="copyright">2017 Britney Inglis</span><br>
                <span id="devCredit">Design by Richard Williams</span>
            </div>
        </footer>
    </body>
    </html>