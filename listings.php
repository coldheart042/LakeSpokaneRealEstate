<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 7:25 AM
 */
$Title = "Listings";
include "includes.php";

    #Navbar
$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);

    #Listing Table
#Get Listings from SQL database and create models from the SQL result
$ListingModel = new ListingModel();
$ListingTableController = new listingTableController($ListingModel);
$ListingTableView = new ListingTableView($ListingModel, $ListingTableController);

$Content = $ListingTableView->output();
include "template.php";