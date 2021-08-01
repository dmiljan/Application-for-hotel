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

    <link rel="stylesheet" href="styles/viewImage.css">

    <title>Document</title>
    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
    <style>
        .image{
            display:flex;
        }
        .row{
            width: 400px; !important;
        }
        #expandedImg{
            width: 630px !important;
        }
    </style>
</head>
<body>
<?php
require "connection/connection.php";

$queryImage = "SELECT * FROM `image` WHERE image.accommodation_id=$accommodation_id";
$resultImage = mysqli_query($connection, $queryImage);
?>

<div class="table" style="display: inline">
    <div class="row" style="display: inline-block;">
        <?php
        while ($rowImage = mysqli_fetch_assoc($resultImage)){
            ?>
            <img src="<?= $rowImage['image_path']?>" alt="..." style="width:50%;" onclick="myFunction(this);">
            <?php
        }?>
    </div>
</div>
<div class="container" style="display: inline">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:50%">
    <div id="imgtext"></div>
</div>
</body>
</html>
