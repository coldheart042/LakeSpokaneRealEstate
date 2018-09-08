<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 11:38 PM
 */
class listingDetailView
{
    private $model;
    private $controller;

    function __construct(ListingModel $listingModel, listingDetailController $listingDetailController)
    {
        $this->model = $listingModel;
        $this->controller = $listingDetailController;
    }

    function id(){
        return $this->model->Address;
    }
    function buildImages(){
        $tags = "";
        foreach ($this->model->Images as $filePath => $alt){
            $tags = $tags . "<div><img class='slideImg' src='$filePath' alt='$alt'></div>";
        }
        return $tags;
    }

    function output(){
        $this->controller->setModel();
        $Address = $this->model->Address;
        $Description = $this->model->Desc;
        $Description = utf8_encode($Description);
        $Beds = $this->model->Beds;
        $Baths = $this->model->Baths;
        $Acres = $this->model->Acres;
        $MLSLink = $this->model->MLSLink;
        $MLSNO = $this->model->MLSNo;
        setlocale(LC_MONETARY, 'en_US');
        $Price = money_format('%n',floatval($this->model->Price)) ;
        $Images = $this->buildImages();
        $output = "
<div id='slider1_container' style=\"position: relative; top: 0; left: 0; width: 600px; height: 600px;\" >
    <div u=\"slides\" style=\"cursor: move; position: absolute; overflow: hidden; left: 0; top: 0; width: 600px; height: 600px;\">
        $Images
    </div>
</div>
<div>
<h3>$Address</h3>
<p>$Description</p>
<span>Beds: $Beds</span>
<span>Baths: $Baths</span>
<span>Acres: $Acres</span>
<span>Listing Price: $Price</span>
<span>MLS Number (click to view original MLS listing in new window): <a href='$MLSLink' target='_blank'>$MLSNO</a> </span>
</div>        ";
        return $output;
    }
}