<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 12/7/2016
 * Time: 9:46 AM
 */
session_start();
include "../../page.php";
include "../../template.php";
include "../dbConnect.php";
$db = dbConnect();


$currentPage = new page("", 2, "");
echo head($currentPage, "../../css/styles.css");
echo T_header($currentPage);

//Test if this mongrel bastard is actually set...
if (isset($_POST['listingId'])){
    $listingId = $_POST['listingId'];
    //Todo: Get Images by listingId
    echo dbGetListing($db, $listingId);
}
else {
    echo "<h1>Oops, this page can't be displayed!</h1>";
}
echo footer($currentPage);