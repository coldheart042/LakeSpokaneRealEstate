<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/10/2016
 * Time: 8:01 AM
 */
session_start();
include "../page.php";
include "dbConnect.php";


//Create the pages:
$currentPage = new page("", 1, "Listings");
$cssRef = "../css/styles.css";
include "../template.php";
echo head($currentPage, $cssRef);

echo T_header($currentPage);
//Content Begin:
$db = dbConnect();

echo dbGetListings($db);

//Content End
echo footer($currentPage);