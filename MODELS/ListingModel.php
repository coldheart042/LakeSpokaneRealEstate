<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 8:03 AM
 */
class ListingModel
{
    public $ID;
    public $Address;
    public $MLSNo;
    public $MLSLink;
    public $Acres;
    public $Beds;
    public $Baths;
    public $Desc;
    public $Price;
    public $Images; #This is going to be an array (url=>description)
    public function __construct()
    {
        $this->ID = "";
        $this->Address = "";
        $this->MLSNo = "";
        $this->MLSLink = "";
        $this->Acres = "";
        $this->Beds = "";
        $this->Baths = "";
        $this->Desc = "";
        $this->Price = "";
        $this->Images = array(); #Remember, Array!
    }
}