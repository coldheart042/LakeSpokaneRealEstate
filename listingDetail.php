<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 11:43 PM
 */
include 'includes.php';

$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);

$ListingModel = new ListingModel();
$listingDetailController = new listingDetailController($ListingModel);
$listingDetailView = new listingDetailView($ListingModel, $listingDetailController);

$Content = $listingDetailView->output();
$Title = "Detail: " . $listingDetailView->id();

include 'template.php';