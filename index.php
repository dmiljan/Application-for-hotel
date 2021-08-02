<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/index.css">
    <title>Hotel Jadran</title>
</head>
<body>
<?php
require "header.php";
?>
<div class="jumbotron" style="position:absolute;bottom:0; width: 100%" >
    <div class="phone">
        <img src="https://img.icons8.com/material-rounded/24/000000/phone-disconnected.png"/> +387 65 378-280
    </div>
    <div class="email">
        <img src="https://img.icons8.com/material-rounded/24/000000/email-open.png"/> recepcija@hotel-jadran.com
    </div>
</div>
<?php include 'topNavigation.php'; ?>
<?php include 'slideShow.php'; ?>
</body>
<script>
    var btn = document.getElementById('btnLogin');
    btn.addEventListener('click', function () {
        document.location.href = 'login.php';
    });
</script>
</html>
