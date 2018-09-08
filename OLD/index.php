<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/10/2016
 * Time: 8:02 AM
 */
include "page.php";
include "dbConnect.php";


//Create the pages:

$currentPage = new page("", 0, "Home");
$cssRef = "css/styles.css";
include "template.php";
echo head($currentPage, $cssRef);

echo T_header($currentPage);

//This is where content lives!

$content = <<<EOC
    <main class='home'>
        <h3 class="grayscale">This is the main content!</h3>
        <p class="grayscale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc in purus ultricies imperdiet quis vitae eros. Suspendisse potenti. Etiam placerat sagittis elementum. In arcu ligula, aliquet eu nunc vel, consectetur accumsan ligula. Mauris in faucibus tellus, nec vulputate metus. Praesent vulputate at augue sed efficitur. Cras congue, arcu sit amet egestas semper, purus arcu commodo erat, id venenatis diam magna maximus diam. Morbi a pretium orci. Nunc vulputate, purus nec aliquam aliquet, libero nibh tristique dui, vitae tristique nibh arcu vitae sem. In porttitor velit in scelerisque vestibulum. Ut lacinia porta ornare. Duis accumsan malesuada augue aliquam imperdiet. Vivamus ullamcorper imperdiet blandit. Curabitur at mauris eget neque cursus venenatis. Cras lacinia ipsum vitae nisi hendrerit, sodales pulvinar orci imperdiet.</p>
    </main>
EOC;
echo $content;


//This is where content dies!
echo footer($currentPage);

