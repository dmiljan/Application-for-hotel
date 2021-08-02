<?php
//if(!isset($_SESSION['userAdmin'])){
//    header("Location: login.php");
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <title>Add accommodation</title>
</head>
<body>
<form class="addAccommodation" action="addAccommodation_check.php" method="post">
    <div class="container">
        <div class="header">
            <h1 >Smještaj</h1>
        </div>
        <hr>
        <input type="text" name="nameAccommodation" placeholder="Naziv smještaja">
        <select style="background: #f1f1f1;" name="listTypeAccommodation">
            <option value="0">Tip smještaja</option>
            <option value="1">Soba</option>
            <option value="2">Apartman</option>
        </select>
        <input type="text" name="capacity" placeholder="Kapacitet">
        <div style="display: flex">
            <input style="width: 50%; margin-right: 10px" type="text" name="price" placeholder="Cijena za radne dane">
            <input style="width: 50%" type="text" name="priceWithBreakfast" placeholder="Cijena za radne dane sa doručkom">
        </div>
        <div style="display: flex">
            <input style="width: 50%; margin-right: 10px" type="text" name="priceWeekend" placeholder="Cijena za vikend">
            <input style="width: 50%" type="text" name="priceWeekendWithBreakfast" placeholder="Cijena za vikend sa doručkom">
        </div>
        <input type="submit" class="obligationbtn" value="Dodaj smještaj">
    </div>
</form>
</body>
</html>