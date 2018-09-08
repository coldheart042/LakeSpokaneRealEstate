<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 7:25 AM
 */
$Title = "Contact";
include "includes.php";

$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);

$Content = "<h1>Contact Us</h1>
<span>Britney R. Inglis</span><br>
<span>Real Estate Broker</span><br>
<span>(509)218-8062</span> || <a href='tel:+15092188062'>Call Now!</a> <br>
<hr class='contactHR'>
<address>Real Estate Marketplace NW, Inc.<br>
5998 Hwy 291, Suite 6<br>
Nine Mile Falls, WA 99026</address>";

include "template.php";