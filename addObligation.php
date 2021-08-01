<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
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

    <title>Obligation</title>
</head>
<body>
<form class="obligation" method="post" action="addObligation_check.php">
    <div class="container">
        <div class="header"><h1>Obaveza</h1></div>

        <hr>

        <input type="text" placeholder="Naziv obaveze" name="name" required>


        <input type="text" placeholder="Opis obaveze" name="description" required>
        <div style="display: flex">
            <div style="width: 50%; margin-right: 10px">
                <input style="margin-bottom: 0px;  background: #f1f1f1;" type="date" name="startDate">
                <label style="font-size: 12px;">Datum pocetka</label>
            </div>
            <div  style="width: 50%;">
                <input style="margin-bottom: 0px" type="datetime-local" name="endDateTime">
                <label style="display:flex; font-size: 12px;">Datum i vrijeme zavrsetka</label>
            </div>
        </div>

<!--        <hr>-->
        <input type="submit" class="obligationbtn" value="Dodaj obavezu">
    </div>
</form>
</body>
</html>
