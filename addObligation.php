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
        <h1>Obaveza</h1>
        <hr>
        <label><b>Naziv obaveze:</b></label>
        <input type="text" placeholder="Naziv obaveze" name="name" required>

        <label><b>Opis obaveze</b></label>
        <input type="text" placeholder="Opis obaveze" name="description" required>

        <label><b>Datum pocetka</b></label><br>
        <input type="date" name="startDate" style="width: 200px"><br><br>

        <label><b>Datum zavrsetka</b></label><br>
        <input type="datetime-local" name="endDateTime" style="width: 250px"><br><br>

        <hr>
        <input type="submit" class="obligationbtn" value="Dodaj obavezu">
    </div>
</form>
</body>
</html>
