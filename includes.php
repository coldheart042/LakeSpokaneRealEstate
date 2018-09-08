<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 6:36 AM
 */
session_start();
    #Nav bar
include "MODELS/NavModel.php";
include "CONTROLLERS/NavController.php";
include "VIEWS/NavView.php";

    #Database
include "dbConnect.php";

    #Users
include "MODELS/userModel.php";
include "CONTROLLERS/userController.php";
include "VIEWS/userView.php";

    #Listings
include "MODELS/ListingModel.php";
include "CONTROLLERS/listingTableController.php";
include "CONTROLLERS/listingDetailController.php";
include "VIEWS/ListingTableView.php";
include "VIEWS/listingDetailView.php";

    #RSS Feed
include "rss.php";