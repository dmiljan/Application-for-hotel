<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/galleryImage.css">
</head>
<body>
<?php //posto se ova stranica koristi na dva mjesta, button je nekad potreban a nekad ne
if(!isset($_SESSION['userAdmin']) and !isset($_SESSION['userWorker']) and !isset($_SESSION['userGuest'])) {
    ?>
    <button type="button" class="btn" id="btnHome"><i class="fa fa-home"></i> Početna</button>
    <?php
}
?>
<div class="row">
    <div class="column">
        <img src="imageGallery/1.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/2.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/3.jpg" alt="Mountains" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/4.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/5.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/6.jpg" alt="Mountains" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/7.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/8.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/9.jpg" alt="Mountains" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/10.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/11.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="imageGallery/12.jpg" alt="Mountains" style="width:100%">
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
