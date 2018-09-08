<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11/18/2016
 * Time: 7:05 AM
 */
session_start();
function dbConnect(){
    $db = new mysqli('localhost','coldheart042','042148Ab!!','dbSiteInfo');
    if ($db->connect_error){$message = $db->connect_error;}
    else{$message = "";}
    echo $message;
    return $db;
}

function dbGetListings(mysqli $db){
    $table = "<table><th>Id</th><th>Address</th><th>MLS Listing</th><th>Acres</th><th>Beds</th><th>Baths</th><th>Action</th>";
    $sqlResult = $db->query("Select id, address, mlsNumber, mlsLink, acres, beds, baths from listings");
    while (list($id, $address, $mlsNumber, $mlsLink, $acres, $beds, $baths)= $sqlResult->fetch_row()){
        $row = "<tr><td>$id</td><td>$address</td><td><a href='$mlsLink'>$mlsNumber</a></td><td>$acres</td><td>$beds</td><td>$baths</td><td><form method='post' action=><input type='hidden' name='listingId' value='$id'><input type='submit' value='view'></form> </td></tr>\n";
        $table = $table . $row;
    }
    return $table . "</table>";
}

function dbGetListing(mysqli $db, $listingId){
    $sqlResult = $db->query("Select address, mlsNumber, mlsLink, acres, beds, baths, description from listings WHERE id=$listingId");
    $row = $sqlResult->fetch_assoc();
    $address = $row['address'];
    $mlsNumber = $row['mlsNumber'];
    $mlsLink = $row['mlsLink'];
    $acres = $row['acres'];
    $beds = $row['beds'];
    $baths = $row['baths'];
    $description = $row['description'];
    $tags = "
    <main>
    <h3>$address</h3>
    <p>$description</p>
    <table>
        <thead>
            <th>MLS Number</th>
            <th>Beds</th>
            <th>Baths</th>
            <th>Acres</th>
        </thead>
        <tbody>
            <tr><a href='$mlsLink'>$mlsNumber</a> </tr>
            <tr>$beds</tr>
            <tr>$baths</tr>
            <tr>$acres</tr>
        </tbody>
    </table>
    </main>
    ";
    return $tags;
}
