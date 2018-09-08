<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 4:30 AM
 */
class userController
{
    private $model;

    function __construct($userModel)
    {
        $this->model = $userModel;
    }

    function loginCheck()
    {
        $uName = $this->model->uName;
        $pass = $this->model->pass;
        if($uName != "" && $pass != ""){
            $db = dbAuth();
            $result = $db->query("SELECT COUNT(ID) FROM dbSiteInfo.users WHERE userName='$uName' && pass='$pass'");
            $loginResult = $result->fetch_row();
            if($loginResult[0] == 1){
                $_SESSION["login"] = true;

            }
            return "";
        }
        else{
            return "Invalid Username or Password!";
        }
    }
}