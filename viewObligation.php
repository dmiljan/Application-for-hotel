<?php
//if(!isset($_SESSION['userAdmin']) OR !isset($_SESSION['userWorker'])){
//    header("Location: login.php");
//}
?>
<link rel="stylesheet" href="styles/table.css">
<?php
require "connection/connection.php";

$id_obligation = $_GET['obligationId'];

$queryObligation = <<<SQL
    SELECT * 
    FROM `obligation` 
    WHERE id='$id_obligation'
SQL;
$resultObligation = mysqli_query($connection, $queryObligation);
$rowObligation=mysqli_fetch_assoc($resultObligation);
?>
<label><b style="color:  #008CBA">Naziv obaveze:</b></label> <?= $rowObligation['name'] ?><br>
<label><b style="color:  #008CBA">Opis obaveze:</b></label> <?= $rowObligation['description']?> <br>
<label><b style="color:  #008CBA">Datum početka:</b></label> <?= $rowObligation['start_date'] ?><br>
<label><b style="color:  #008CBA">Datum i vrijeme završetka:</b></label> <?= $rowObligation['end_date_time'] ?><br><br>
<label><b style="color:  #008CBA">Zadužen-i radnik-ci:</b></label><br><br>
<?php
$queryUserHasObligation = <<<SQL
    SELECT * 
    FROM `user_has_obligation` 
    WHERE obligation_id = '$id_obligation'
SQL;
$resultUserHasObligation = mysqli_query($connection, $queryUserHasObligation);

while($rowUserHasObligation = mysqli_fetch_assoc($resultUserHasObligation)){
    $userId = $rowUserHasObligation['user_id'];
    $queryUser = <<<SQL
        SELECT * 
        FROM `user` 
        WHERE id='$userId'
SQL;
    $resultUser = mysqli_query($connection,$queryUser);
    $rowUser = mysqli_fetch_assoc($resultUser);
    ?>
    <a href="<?='deleteRow.php?id='.$userId.'&id_obligation='.$id_obligation.'&name=user_has_obligation'?>" class="btn" style="background: #9e2e2b; margin-right: 2px" >
        <i class="fa fa-trash" style="margin-left: 9px"></i>
    </a>
    <?php
    echo $rowUser['firstname']." ".$rowUser['lastname'];
    ?>
<br><br>
<?php
}
?>



