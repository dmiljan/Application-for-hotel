<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/galleryImage.css">
</head>
<body>

<?php //posto se ova strnica koristi na dva mjesta, button je nekad potreban a nekad ne
if(!isset($_SESSION['userAdmin']) and !isset($_SESSION['userWorker']) and !isset($_SESSION['userGuest'])) {
    ?>
    <button type="button" class="btn" id="btnHome"><i class="fa fa-home"></i> Početna</button>
    <?php
}
?>
<div class="row">
    <div class="column">
        <img src="galeryImage/1.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/2.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/3.jpg" alt="Mountains" style="width:100%">
    </div>

    <div class="column">
        <img src="galeryImage/4.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/5.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/6.jpg" alt="Mountains" style="width:100%">
    </div>

    <div class="column">
        <img src="galeryImage/7.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/8.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/9.jpg" alt="Mountains" style="width:100%">
    </div>

    <div class="column">
        <img src="galeryImage/10.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/11.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="galeryImage/12.jpg" alt="Mountains" style="width:100%">
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
