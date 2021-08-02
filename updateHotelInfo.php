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
    <title>Hotel information</title>
</head>
<body>
<form class="HotelInfo" method="post" action="updateHotelInfo_check.php">
    <div class="container">
        <div class="header"><h1>Informacije o hotelu</h1></div>
        <hr>
        <input type="text" placeholder="Ime hotela" name="hotelName" required>
        <input type="text" placeholder="Adresa hotela" name="hotelAdress" required>
        <input type="text" placeholder="PIB" name="pib" required>
        <input type="text" placeholder="Broj zvjezdica" name="starRating" required>
        <input type="text" placeholder="Broj smještaja " name="numberAccommodation" required>
        <hr>
        <input type="submit" class="rezervationbtn" value="Sacuvaj">
    </div>
</form>
</body>
</html>
