<?php
//session_start();
//if(!isset($_SESSION['userAdmin']) or !isset($_SESSION['userWorker']) or !isset($_SESSION['userGuest'])){
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="styles/indexAdmin.css">
    <title>Admin page</title>
</head>
<body>
<?php
include 'sideNavigation.php';
?>
<div class="main">
    <?php
    if(isset($_REQUEST['name']))
    {
        require $_REQUEST['name'].".php";
    }
    ?>
</div>
</body>
</html>