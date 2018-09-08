<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 4:57 AM
 */
$Title = "Home";
include "includes.php";

$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);
$feedlist = new rss("http://feeds.feedburner.com/narnewsreleases");
$Content = $feedlist->display(2, "Real Estate News");
include "template.php";