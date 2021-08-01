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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

    <link rel="stylesheet" href="styles/regRezObliAcc.css">

    <title>Assing obligation</title>
</head>
<body>
<form class="obligation" method="post" action="assignObligation_check.php">
    <div class="container">
        <div class="header"><h1>Dodjeljivanje obaveze</h1></div>
        <hr>

<!--        <label><b>Ime i prezime radnika:</b></label>-->
        <?php include 'selectlistUserWorker.php'; ?><br><br>

<!--        <label><b>Naziv obaveze</b></label>-->
        <?php include 'selectlistObligation.php'; ?>

        <hr>
        <input type="submit" class="obligationbtn" value="Dodijeli obavezu">
    </div>
</form>
</body>
<script type="text/javascript">
    $(".chosen").chosen();
</script>
</html>