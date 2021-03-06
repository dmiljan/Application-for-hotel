<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker']) OR !isset($_SESSION['userGuest'])){
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

<!--    ovo je uradjeno zbog search u listi-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery-ui.min.js"></script> <!--  bez ovog linka radi select lista tj search-->
<!--    sa ovog linka sam kopirao ove linkove:https://cdnjs.com/libraries/chosen  i ovaj klip:https://www.youtube.com/watch?v=d-gAPYRLMeI-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

    <link rel="stylesheet" href="styles/regRezObliAcc.css">

    <script src="scripts/rezervation.js"></script>

    <title>Rezervation</title>
</head>
<body>
<form class="rezervation" method="post" action="rezervation_check.php">
    <div class="container">
        <h1>Rezervacija</h1>
        <hr>
        <?php include 'selectlistGuest.php';?> <br><br>

        <label><b>Datum dolaska</b></label><br>
        <input type="date" name="dateArrival" id="dateArrival" onchange="loadListAccommodation()" style="width: 200px"><br>
        <label><b>Datum odlaska</b></label><br>
        <input type="date" name="dateDeparture" id="dateDeparture"  onchange="loadListAccommodation()" style="width: 200px"><br>

        <div id="listAccommodation">

        </div>
        <label><b>Godine</b></label>
        <input type="text" placeholder="Godine" name="age" required>

        <label><b>Jmbg</b></label>
        <input type="text" placeholder="Jmbg" name="jmbg" required>

        <hr>
        <input type="submit" class="rezervationbtn" value="Rezervisi">
    </div>
</form>
</body>
<script type="text/javascript">
    $(".chosen").chosen();
</script>
</html>