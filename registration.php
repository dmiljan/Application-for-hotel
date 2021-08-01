<?php
//if(!isset($_SESSION['userAdmin'])){
//    header("Location: login.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="styles/regRezObliAcc.css">
    <script src="scripts/registration.js"></script>

</head>
<body>
<form class="registration" method="post" action="registration_ckeck.php">
    <div class="container">
        <div class="header"><h1>Registracija</h1></div>
        <hr>
        <div style="display: flex">
            <input style="width: 50%; margin-right: 10px" type="text" placeholder="Ime" name="firstname" required>
            <input style="width: 50%; " type="text" placeholder="Prezime" name="lastname" required>
        </div>

        <input type="text" placeholder="Email" name="email" required>

       <span style="display: flex">
            <input style="width: 50%; margin-right: 10px; background: #f1f1f1;" type="password" placeholder="Lozinka" name="password" required>
            <input style="width: 50%; background: #f1f1f1;" type="password" placeholder="Potvrdi lozinku" name="passwordRepeat" required>
       </span>

        <div class="custom-select" style="width:100%;">
            <select style="background: #f1f1f1;" name="userList" onchange="loadNewFields(this)">
                <option value="0">Tip korisnika:</option>
                <option value="1">Administrator</option>
                <option value="2">Radnik</option>
                <option value="3">Gost</option>
            </select><br><br>
        </div>

        <div id="fields">
        </div>
<!--        <hr>-->

        <div class="button-container">
            <input type="submit" class="registerbtn" value="Registruj">
        </div>


    </div>
</form>
</body>
</html>







