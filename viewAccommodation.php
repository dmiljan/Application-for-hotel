<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker']) OR !isset($_SESSION['userGuest'])){
//    header("Location: login.php");
//}
?>

<link rel="stylesheet" href="styles/viewAccommodation.css">

<?php
$accommodation_id = $_GET['accommodationId'];

require "connection/connection.php";
$query = "SELECT * FROM `accommodation` JOIN `price` ON accommodation.price_id=price.id WHERE accommodation.id=$accommodation_id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>
<div class="info">
    <label><b style="color:  #008CBA"> Naziv smjestaja:</b></label><?= $row['name'] ?><br>
    <label><b style="color:  #008CBA">Kapacitet:</b></label><?= $row['capacity'] ?><br>
    <label><b style="color:  #008CBA">Tip:</b></label>
    <?php
    if($row['accommodation_type_id'] == '1'){
        echo "soba";
    }else{
        echo "apartman";
    }
    ?><br>
    <label><b style="color:  #008CBA">Cijena:</b></label><?=$row['price']?> <label style="margin-right: 78px">KM</label>
    <label><b style="color:  #008CBA">Cijena sa doručkom:</b></label><?=$row['price_with_breakfast']?> KM<br>
    <label><b style="color:  #008CBA">Cijena vikendom:</b></label><?=$row['price_weekend']?> KM
    <label><b style="color:  #008CBA">Cijena vikendom sa doručkom:</b></label><?=$row['price_weekend_with_breakfast']?> KM<br>
    <div class="divBtn">
        <?php
        if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker'])) {
        ?>
        <button class="btnRezervation" id="btnRezervation" onclick="location.href='indexAdmin.php?name=addRezervation&id_accommodation='+<?=$accommodation_id?>">Rezervisi</button>
        <?php
        }
        ?>
    </div>
    <hr>
</div>
<div class="image">
    <?php require "viewImageAccommodation.php"; ?>
</div>






