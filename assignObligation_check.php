<?php
if(isset($_REQUEST['userWorkerList']) and isset($_REQUEST['obligationList'])){
    require "connection/connection.php";

    $userWorker_id = $_REQUEST['userWorkerList'];
    $obligation_id = $_REQUEST['obligationList'];

    $query = <<<SQL
        INSERT INTO `user_has_obligation`(`user_id`, `obligation_id`) 
        VALUES ('$userWorker_id', '$obligation_id')
SQL;
    $result = mysqli_query($connection, $query);

    header("Location:indexAdmin.php?name=assignObligation");
}