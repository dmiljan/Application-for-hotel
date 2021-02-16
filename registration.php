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
        <h1>Registracija</h1>
        <hr>
        <label><b>Ime</b></label>
        <input type="text" placeholder="Ime" name="firstname" required>

        <label><b>Prezime</b></label>
        <input type="text" placeholder="Prezime" name="lastname" required>

        <label><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label><b>Šifra</b></label>
        <input type="password" placeholder="Šifra" name="password" required>

        <label><b>Potvrdi šifru</b></label>
        <input type="password" placeholder="Potvrdi šifru" name="passwordRepeat" required>

        <div class="custom-select" style="width:200px;">
            <select name="userList" onchange="loadNewFields(this)">
                <option value="0"><b>Tip korisnika:</b></option>
                <option value="1">Administrator</option>
                <option value="2">Radnik</option>
                <option value="3">Gost</option>
            </select><br><br>
        </div>

        <div id="fields">
        </div>
        <hr>
        <input type="submit" class="registerbtn" value="Registruj">
    </div>
</form>
</body>
</html>







