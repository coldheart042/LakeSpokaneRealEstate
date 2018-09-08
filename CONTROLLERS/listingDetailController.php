<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 11:38 PM
 */
class listingDetailController
{
    private $model;

    function __construct(ListingModel $listingModel)
    {
        $this->model = $listingModel;
    }

    function setModel(){
        $id= $_GET['id'];
        $db = dbConnect();
        try {
            $result = $db->query("SELECT * FROM listings WHERE id=$id");
            list($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]) = $result->fetch_row();
            $this->model->ID = $row[0];
            $this->model->Desc = $row[1];
            $this->model->Beds = $row[2];
            $this->model->Baths = $row[3];
            $this->model->Acres = $row[4];
            $this->model->MLSLink = $row[5];
            $this->model->MLSNo = $row[6];
            $this->model->Address = $row[7];
            $this->model->Price = $row[8];
            $result = $db->query("SELECT filepath, altData FROM images WHERE listingIDFK = $id");
            while (list($row[0],$row[1])=$result->fetch_row()){
                $this->model->Images[$row[0]] = $row[1];
            }
        } catch (Exception $e) {
            header("Location: http://lakespokanerealestate.com/");
        }
    }
}