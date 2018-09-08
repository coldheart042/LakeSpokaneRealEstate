<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 6:59 AM
 */
class listingTableController
{
    private $model;
    function __construct($listingModel)
    {
        $this->model = $listingModel;
    }

    function modelUpdate($row)
    {

        $this->model->ID = $row[0];
        $this->model->Desc = $row[1];
        $this->model->Beds = $row[2];
        $this->model->Baths = $row[3];
        $this->model->Acres = $row[4];
        $this->model->MLSLink = $row[5];
        $this->model->MLSNo = $row[6];
        $this->model->Address = $row[7];
        $this->model->Price = $row[8];
    }
}