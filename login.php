<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/18/2017
 * Time: 3:16 PM
 */
include 'includes.php';
$Title = 'Login';

$uName = "";
$pass = "";
$error = "";

if(isset($_POST['uName'])){
    if(isset($_POST['pass'])){
        $uName = $_POST['uName'];
        $pass = $_POST['pass'];
    }
}
if(isset($_SESSION['login'])){
    if ($_SESSION['login']==true) {
        header("Location: http://lakespokanerealestate.com/MVC/listings.php");
    }
}
#Navbar
$NavModel = new NavModel($Title);
$NavController = new NavController($NavModel);
$NavView = new NavView($NavModel, $NavController);

#Login Form
$UserModel = new userModel($uName, $pass, $error);
$UserController = new userController($UserModel);
$UserView = new userView($UserModel, $UserController);

$Content =  $UserView->output();
include 'template.php';