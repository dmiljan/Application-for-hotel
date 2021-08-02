<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/hotelInfo.css">
</head>
<body>
<div class="container">
    <img src="image/login.jpg" alt="Notebook" style="width:100%;">
    <div class="content">
        <?php
        require "connection/connection.php";

        if(!isset($_SESSION['userAdmin']) and !isset($_SESSION['userWorker']) and !isset($_SESSION['userGuest'])) {
            ?>
            <button type="button" class="btn" id="btnHome"><i class="fa fa-home"></i> Početna</button>
            <?php
        }
        $query = <<<SQL
            SELECT * 
            FROM `hotel`
SQL;
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result)
        ?>
        <h1>O hotelu</h1>
        <p>
            Hotel Jadran smješten je u centru Budve u starom dijelu grada, popularno nazvanom “Hanište”.
            Ovaj, nekada zanatski dio grada, još uvijek čuva duh prošlih vremena.
            Hotel se nalazi na lokaciji idealnoj za one koji žele istraživati Budvu ili što brže i lakše obaviti svoje poslovne obaveze.
            Hotel je otvoren 2004. godine i od tada je bio draga adresa mnogim gostima koji su u Budvu dolazili iz cijelog svijeta.<br><br>

            Adresa:
            <?php
            echo $row['address'];
            ?>
            <br>
            Telefon: +387 65 222-222 <br>
            Fax: +387 51 217-222 <br>
            Email: recepcija@hotel-jadran.com
        </p>
    </div>
</div>
</body>
<script>
    var btn = document.getElementById('btnHome');
    btn.addEventListener('click', function () {
        document.location.href = 'index.php';
    });
</script>
</html>
