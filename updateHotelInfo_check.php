<?php
if(isset($_REQUEST['hotelName']) and isset($_REQUEST['hotelAdress']) and isset($_REQUEST['pib']) and isset($_REQUEST['starRating']) and isset($_REQUEST['numberAccommodation'])){
    require "connection/connection.php";

    $hotelName = $_REQUEST['hotelName'];
    $hotelAdress = $_REQUEST['hotelAdress'];
    $pib = $_REQUEST['pib'];
    $starRating = $_REQUEST['starRating'];
    $numberAccommodation = $_REQUEST['numberAccommodation'];

    $query = <<<SQL
        UPDATE `hotel` 
        SET `id`='1', `name`= '$hotelName',`address`='$hotelAdress', `PIB`='$pib', `star_rating`='$starRating', `number_accommodation`='$numberAccommodation'
SQL;
    $result = mysqli_query($connection, $query);

    header("Location:indexAdmin.php");
}