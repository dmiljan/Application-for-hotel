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

    <link rel="stylesheet" href="styles/regRezObliAcc.css">

    <title>Add accommodation</title>
</head>
<body>
<form class="addAccommodation" action="addAccommodation_check.php" method="post">
<div class="container">
    <h1>Smještaj</h1>

    <label><b>Naziv smeštaja:</b></label>
    <input type="text" name="nameAccommodation">

    <select name="listTypeAccommodation">
        <option value="0">Tip smjestaja</option>
        <option value="1">Soba</option>
        <option value="2">Apartman</option>
    </select>

    <label><b>Kapacitet:</b></label>
    <input type="text" name="capacity">

    <label><b>Cijena za radne dane:</b></label>
    <input type="text" name="price">

    <label><b>Cijena za radne dane sa doruckom:</b></label>
    <input type="text" name="priceWithBreakfast">

    <label><b> Cijena za vikend:</b></label>
    <input type="text" name="priceWeekend">

    <label><b>  Cijena za vikend sa doruckom:</b></label>
    <input type="text" name="priceWeekendWithBreakfast">

    <input type="submit" class="obligationbtn" value="Dodaj smještaj">
</div>
</form>
</body>
</html>