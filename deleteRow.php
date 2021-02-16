<?php
require "connection/connection.php";
$id = $_GET['id'];
$name = $_GET['name'];

switch ($name){
    case "accommodation":
        $query = "SELECT COUNT(*) AS `count` FROM `rezervation` WHERE accommodation_id='$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        if($count > 0){
            header("Location: tableAccommodation.php");
        } else {
            $query = "DELETE FROM `image` WHERE accommodation_id='$id'";
            $result = mysqli_query($connection, $query);

            $query = "DELETE FROM `price` WHERE id='$id'";
            $result = mysqli_query($connection, $query);

            $query = "DELETE FROM `$name` WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            header("Location: tableAccommodation.php");
        }
        break;
    case "obligation":
        $query = "DELETE FROM `user_has_obligation` WHERE obligation_id='$id'";
        $result = mysqli_query($connection, $query);

        $query = "DELETE FROM `$name` WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        header("Location: indexAdmin.php?name=tableObligation");
        break;
    case "rezervation":
        $query = "DELETE FROM `$name` WHERE id='$id'";
        $result = mysqli_query($connection, $query);
         header("Location: indexAdmin.php?name=rezervation");
        break;
    case "guest":
        $query = "SELECT COUNT(*) AS `count` FROM `rezervation` WHERE guest_id='$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        if($count > 0){
            header("Location: indexAdmin.php?name=tableGuestUser&userTypeId=3");
        } else {
            $query = "DELETE FROM `$name` WHERE id='$id'";
            $result = mysqli_query($connection, $query);
            header("Location: indexAdmin.php?name=tableGuestUser&userTypeId=3");
        }
        break;
    case "user":
        $query = "SELECT COUNT(*) AS `count` FROM `rezervation` WHERE user_id='$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        $userTypeId = $_GET['userTypeId'];
        if($count > 0){
            header("Location: indexAdmin.php?name=tableGuestUser&userTypeId=".$userTypeId);
        } else {
            $query = "DELETE FROM `user_has_obligation` WHERE user_id='$userTypeId'";
            $result = mysqli_query($connection, $query);

            $query = "DELETE FROM `$name` WHERE id='$id'";
            $result = mysqli_query($connection, $query);

            header("Location: indexAdmin.php?name=tableGuestUser&userTypeId=".$userTypeId);
        }
        break;
    case "user_has_obligation":
        $id_user = $id;
        $id_obligation = $_GET['id_obligation'];

        $query="DELETE FROM `$name` WHERE user_id='$id_user' AND obligation_id='$id_obligation'";//
        $result = mysqli_query($connection, $query);

        header("Location: indexAdmin.php?name=tableObligation");
        break;
}


