<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 4:40 AM
 */
class userView
{
    private $model;
    private $controller;

    function __construct(userModel $userModel,userController $userController)
    {
        $this->model = $userModel;
        $this->controller = $userController;
    }

    function output(){
        $msg = $this->controller->loginCheck();
       return "
<form action='". htmlspecialchars($_SERVER['PHP_SELF']) ."' method='post'>
    <span style='color:red;'>$msg</span><br>
    <label for='uName'>User Name:</label><input type='text' name='uName' placeholder='User Name'>
    <label for='pass'>Password</label> <input type='password' name='pass'>
    <button type='submit'>Submit</button>
</form>
";
    }
}