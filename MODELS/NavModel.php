<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 5:57 AM
 */
class NavModel
{
    public $data; #Associative array of main navigation
    public $name; #Name of the page that called it

    public function __construct($PageName)
    {
        $this->data = array(
            "Home" => "index.php",
            "About" => "about.php",
            "Contact" => "contact.php",
            "Listings" => "listings.php",
        );
        $this->name = $PageName;
    }
}