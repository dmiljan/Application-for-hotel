<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>
<link rel="stylesheet" href="styles/table.css">

<?php
$id_obligation = $_GET['obligationId'];

require "connection/connection.php";
$queryObligation = "SELECT * FROM `obligation` WHERE id='$id_obligation'";
$resultObligation = mysqli_query($connection, $queryObligation);
$rowObligation=mysqli_fetch_assoc($resultObligation);
?>
<label><b style="color:  #008CBA">Naziv obaveze:</b></label> <?= $rowObligation['name'] ?><br>
<label><b style="color:  #008CBA">Opis obaveze:</b></label> <?= $rowObligation['description']?> <br>
<label><b style="color:  #008CBA">Datum početka:</b></label> <?= $rowObligation['start_date'] ?><br>
<label><b style="color:  #008CBA">Datum i vrijeme završetka:</b></label> <?= $rowObligation['end_date_time'] ?><br><br>
<label><b style="color:  #008CBA">Zadužen-i radnik-ci:</b></label><br><br>
<?php
$queryUserHasObligation = "SELECT * FROM `user_has_obligation` WHERE obligation_id = '$id_obligation';";
$resultUserHasObligation = mysqli_query($connection, $queryUserHasObligation);

while($rowUserHasObligation = mysqli_fetch_assoc($resultUserHasObligation)){
    $userId = $rowUserHasObligation['user_id'];

    $queryUser = "SELECT * FROM `user` WHERE id='$userId'";
    $resultUser = mysqli_query($connection,$queryUser);
    $rowUser = mysqli_fetch_assoc($resultUser);
    ?>
    <a href="<?= 'deleteRow.php?id='.$userId.'&id_obligation='.$id_obligation.'&name=user_has_obligation'?>"  style="text-decoration: none; border-radius: 6px " class="btn"><i class="fa fa-trash"></i></a>
    <?php
    echo $rowUser['firstname']." ".$rowUser['lastname'];
    ?>
<br><br>
<?php
}
?>



