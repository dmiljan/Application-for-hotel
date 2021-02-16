<?php
session_start();
if(isset($_REQUEST['guestList']) and isset($_REQUEST['accommodationList']) and isset($_REQUEST['age']) and  isset($_REQUEST['jmbg']) and isset($_REQUEST['dateArrival']) and  isset($_REQUEST['dateDeparture'])){
    $guest_id = $_REQUEST['guestList'];
    $accommodation_id = $_REQUEST['accommodationList'];
    $age = $_REQUEST['age'];
    $jmbg = $_REQUEST['jmbg'];
    $dateArrival = $_REQUEST['dateArrival'];
    $dateDeparture = $_REQUEST['dateDeparture'];
    $user_id =  $_SESSION['user']['id'];

    require "connection/connection.php";
    $query = "INSERT INTO `rezervation`(`age`, `jmbg`, `date_arrival`, `date_departure`, `accommodation_id`, `user_id`, `guest_id`) 
                                   VALUES ('$age', '$jmbg', '$dateArrival', '$dateDeparture', '$accommodation_id', '$user_id', '$guest_id')";
    $result = mysqli_query($connection, $query);
    header("Location:indexAdmin.php");
}