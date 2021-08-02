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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!--search u listi-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script> <!--search u listi-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"> <!--search u listi-->
    <link rel="stylesheet" href="styles/main.css">
    <title>Assing obligation</title>
</head>
<body>
<form class="obligation" method="post" action="assignObligation_check.php">
    <div class="container">
        <div class="header"><h1>Dodjeljivanje obaveze</h1></div>
        <hr>
        <?php include 'selectlistUserWorker.php'; ?> <br><br>
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