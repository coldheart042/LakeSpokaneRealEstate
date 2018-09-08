<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 7:24 AM
 */
$Title = "About";
include "includes.php";

$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);

$Content = "
<img id='slider1_container' src='Images/Britney.jpg' alt='Britney Inglis' width='450em'>
<div>
<h3>About Britney:</h3>
<p class='para'>I am happily married, with two wonderful children. My oldest attends Lake Spokane Elementary, and my youngest is 3 years old. My husband’s family has been doing construction locally since 1993. We love to travel, and be outdoors any chance we get. We also have several animals to keep us company: dogs, a cat and chickens.</p> 
<p class='para'>My family has successfully owned, managed, and sold vacation rentals and Real Estate in Big Bear Lake, California, providing me with professional and knowledgeable guidance.  Prior to Real Estate Marketplace, I was a successful paralegal for nearly 10 years. I assisted several of Spokane’s most prominent attorneys with Personal Injury, L & I, Criminal and Civil cases, helping clients in need of legal assistance. My background as a Paralegal has provided me with tools to help my clients make informed decisions and obtain the best outcome possible.</p>  
<p class='para'>You will be provided legendary service at the highest level of professionalism with a smile. I am available for appointments anytime and always available on my cell phone <a href='tel:+15092188062'>(509) 218-8062</a>.</p>
</div>
";

include "template.php";