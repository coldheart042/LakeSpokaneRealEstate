<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/10/2016
 * Time: 9:00 AM
 */

function head(page $currentPage, $cssRef){
    $index = str_repeat("../", $currentPage->index);
    $tags = <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <link rel='shortcut icon' href='$index/favicon.ico' type='image/x-icon'/>
        <title>Lake Spokane Real Estate - $currentPage->Title</title>
        <link rel="stylesheet" href="$cssRef">
        <meta charset="UTF-8">
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

EOT;
    return $tags;
}
function T_header(page $currentPage){
    $home = new page("", 0, "Home");
    $homeLink = $home->link($currentPage);

    $about = new page("about/", 1, "About Us");
    $aboutLink = $about->link($currentPage);

    $contact = new page("contact/", 1, "Contact Us");
    $contactLink = $contact->link($currentPage);

    $listings = new page("listings/", 1, "Listings");
    $listingLink = $listings->link($currentPage);

    $testimonials = new page("testimonials/", 1, "Testimonials");
    $testimonialLink = $testimonials->link($currentPage);

    $tags = <<<EOT
    <header class="grayscale">
        <nav>
            <ul id="navigation">
                <li>$homeLink</li>
                <li>$aboutLink</li>
                <li>$listingLink</li>
                <li>$contactLink</li>
                <li>$testimonialLink</li>
            </ul>
        </nav>
    </header>

EOT;
    return $tags;
}
function footer(page $currentPage){
    $index = str_repeat("../", $currentPage->index) . "images";


    $tags = <<<EOT
        <footer class="grayscale">
            <div class="fb-like" data-href="https://www.facebook.com/search/top/?q=lake%20spokane%20real%20estate" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            <div id="logos"><img src="$index/logo_1363625912.jpg" alt="Real Estate Marketplace"><img src="$index/mls.gif" alt="MLS Membership"><img src="$index/a.jpg" alt="Equal Housing Opportunity"></div>
            <div id="copyright">
                <span>No copyright information yet...</span><br/>
                <span>Built by Richard Williams</span>
            </div>
        </footer>
    </body>
</html>
EOT;
return $tags;
}