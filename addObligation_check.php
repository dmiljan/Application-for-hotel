<?php
if(isset($_REQUEST['name']) and isset($_REQUEST['description']) and isset($_REQUEST['startDate']) and isset($_REQUEST['endDateTime'])){

    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $startDate = $_REQUEST['startDate'];
    $endDateTime = $_REQUEST['endDateTime'];

    require "connection/connection.php";
    $query = "INSERT INTO `obligation`(`name`, `description`, `start_date`, `end_date_time`) 
               VALUES ('$name', '$description', '$startDate', '$endDateTime')";
    $result = mysqli_query($connection, $query);
    header("Location:indexAdmin.php");
}