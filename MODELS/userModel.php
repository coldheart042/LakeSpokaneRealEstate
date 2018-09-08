<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 4:26 AM
 */
class userModel
{
    public $uName;
    public $pass;
    public $err;

    function __construct($username, $password, $error)
    {
        $this->uName = $username;
        $this->pass = $password;
        $this->err = $error;
    }

}