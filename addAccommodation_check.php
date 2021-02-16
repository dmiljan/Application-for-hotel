<?php
if(isset($_REQUEST['nameAccommodation']) and isset($_REQUEST['listTypeAccommodation']) and isset($_REQUEST['capacity'])
    and isset($_REQUEST['price']) and isset($_REQUEST['priceWithBreakfast'])
    and isset($_REQUEST['priceWeekend']) and isset($_REQUEST['priceWeekendWithBreakfast']))
{
    $nameAccommodation = $_REQUEST['nameAccommodation'];
    $typeAccommodation = $_REQUEST['listTypeAccommodation'];
    $capacity = $_REQUEST['capacity'];

    $price = $_REQUEST['price'];
    $priceWithBreakfast = $_REQUEST['priceWithBreakfast'];
    $priceWeekend = $_REQUEST['priceWeekend'];
    $priceWeekendWithBreakfast = $_REQUEST['priceWeekendWithBreakfast'];

    require "connection/connection.php";

    $queryMaxId = "SELECT MAX(id) AS maxId FROM `price`";
    $result = mysqli_query($connection, $queryMaxId);
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['maxId'];
    $new_id_price = $max_id + 1;

    $queryPrice = "INSERT INTO `price`(`id`, `price`, `price_with_breakfast`, `price_weekend`, `price_weekend_with_breakfast`) VALUES ('$new_id_price', '$price', '$priceWithBreakfast', '$priceWeekend', '$priceWeekendWithBreakfast')";

    $queryMaxId = "SELECT MAX(id) AS maxId FROM `accommodation`";

    $result = mysqli_query($connection, $queryMaxId);
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['maxId'];
    $new_id_accommodation = $max_id + 1;

    $queryAccommodation = "INSERT INTO `accommodation`(`id`, `name`, `capacity`, `accommodation_type_id`, `price_id`) VALUES ('$new_id_accommodation', '$nameAccommodation', '$capacity', '$typeAccommodation', '$new_id_price')";

    session_start();
    $_SESSION['id_accommodation'] = $new_id_accommodation;
    $_SESSION['counter'] = 0;
    $_SESSION['queryPrice'] = $queryPrice;
    $_SESSION['queryAccommodation'] = $queryAccommodation;

    header("Location:indexAdmin.php?name=upload");
}
