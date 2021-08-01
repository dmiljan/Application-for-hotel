<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker']) OR !isset($_SESSION['userGuest'])){
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
    <link rel="stylesheet" href="styles/searchForm.css">
    <title>Document</title>
</head>
<body>
<button class="open-button" onclick="openForm()" >Filtriraj</button>
<div class="form-popup" id="searchForm">
    <form action="tableAccommodation.php" class="form-container">
        <select style="background: #f1f1f1;" name="typeAccList">
            <option value="0">Tip smještaja</option>
            <option value="1">Soba</option>
            <option value="2">Apartman</option>
        </select>

        <div style="margin-bottom: 20px">
            <input type="date" name="dateArrival" style="margin: 0">
            <label style="font-size: 15px;"><b>Datum dolaska</b></label>
        </div>

        <div style="margin-bottom: 20px">
            <input type="date" name="dateDeparture" style="margin: 0">
            <label style="font-size: 15px"><b>Datum odlaska</b></label>
        </div>

        <div style="width: 100%; display: flex">
            <input type="text" placeholder="Cijena od" name="priceFrom" style="width: 50%; margin-right: 10px">
            <input type="text" placeholder="Cijena do" name="priceTo" style="width: 50%">
        </div>

        <input type="submit" class="btn" value="Traži">
        <input type="button" class="btn cancel"  onclick="closeForm()" value="Zatvori">
    </form>
</div>
<script>
    function openForm() {
        document.getElementById("searchForm").style.display="block";
    }

    function closeForm() {
        document.getElementById("searchForm").style.display="none";
    }
</script>
</body>
</html>