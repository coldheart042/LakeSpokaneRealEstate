<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/19/2017
 * Time: 7:43 AM
 */
class ListingTableView
{
    private $model;
    private $controller;

    function __construct(ListingModel $listingModel, listingTableController $listingTableController)
    {
        $this->model = $listingModel;
        $this->controller = $listingTableController;
        $this->rows = "";
    }

    function makeRows(){
        $db = dbConnect($_SESSION['login']);
        $result = $db->query('SELECT * FROM listings');
        while (list($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7],$row[8])= $result->fetch_row()){
            $this->controller->modelUpdate($row);
            $address = $this->model->Address;
            setlocale(LC_MONETARY, 'en_US');
            $price = money_format('%n',floatval($this->model->Price)) ;
            $beds = $this->model->Beds;
            $baths = $this->model->Baths;
            $acres = $this->model->Acres;
            $mlsNo = $this->model->MLSNo;
            $mlsLink = $this->model->MLSLink;
            $id = $this->model->ID;
            $this->rows = $this->rows . "
            <h2>Listings</h2>
<table class= 'listingTable'>
    <tr><td colspan='4'><a href='listingDetail.php?id=$id'>$address</a></td></tr>
    <tr>
        <td>Price: $price</td>
        <td>Beds: $beds</td>
        <td>Baths: $baths</td>
        <td>Acres: $acres</td>
    </tr>
    <tr><td colspan = '4'><a href='$mlsLink'>MLS Number: $mlsNo</a></td>
</table>
            ";
        }
    }
    function output(){
        $this->makeRows();
        $output = $this->rows;
        return $output;
    }
}