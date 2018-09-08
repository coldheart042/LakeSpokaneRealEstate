<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/10/2016
 * Time: 8:01 AM
 */
include "../page.php";


//Create the pages:
$home = new page("../", 0, "Home");
$about = new page("", 1, "About Us");
$contact = new page("contact/", 1, "Contact Us");
$listings = new page("listings/", 1, "Listings");
$testimonials = new page("testimonials/", 1, "Testimonials");

$currentPage = $about;
$cssRef = "../css/styles.css";
include "../template.php";
echo head($currentPage, $cssRef);

echo T_header($currentPage);



echo footer($currentPage);