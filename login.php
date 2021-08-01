<?php
//if(isset($_SESSION['user'])){
//    header("Location:index.php");
//}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css" >
</head>
<body>
<?php require 'header.php'; ?>
<form class="login-box" action="login_check.php" method="post">
    <h1>Prijava</h1>
    <div class="textbox">
        <i class="fa fa-envelope-square"></i>
        <input type="email" placeholder="E-mail" name="email">
    </div>
    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Lozinka" name="password">
    </div>
    <input class="submit" type="submit" value="Prijavi se">
</form>
</body>
</html>