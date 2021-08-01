<?php

if($_SESSION['counter'] <= 6){
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES['file']['name']);

    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
        $status = 1;
    }

    require "connection/connection.php";
    session_start();
    $id_accommodation = $_SESSION['id_accommodation'];
    $_SESSION['counter'] += 1;

    if($_SESSION['counter'] == 1){
        $_SESSION['queryImg1'] =  "INSERT INTO `image`(`image_path`, `accommodation_id`) VALUES ('$target_file', '$id_accommodation')";
    }else if($_SESSION['counter'] == 2) {
        $_SESSION['queryImg2'] = "INSERT INTO `image`(`image_path`, `accommodation_id`) VALUES ('$target_file', '$id_accommodation')";
    }

    if ($_SESSION['counter'] == 3){
        $queryPrice=$_SESSION['queryPrice'];
        $queryAccommodation = $_SESSION['queryAccommodation'];
        $result = mysqli_query($connection, $queryPrice);
        $result = mysqli_query($connection, $queryAccommodation);

        $queryImg1 = $_SESSION['queryImg1'];
        $queryImg2 = $_SESSION['queryImg2'];
        $queryImg3 = "INSERT INTO `image`(`image_path`, `accommodation_id`) VALUES ('$target_file', '$id_accommodation')";
        $result = mysqli_query($connection, $queryImg1);
        $result = mysqli_query($connection, $queryImg2);
        $result = mysqli_query($connection, $queryImg3);
    }

    if($_SESSION['counter'] > 3 and $_SESSION['counter'] <= 6){
        $queryImg = "INSERT INTO `image`(`image_path`, `accommodation_id`) VALUES ('$target_file', '$id_accommodation')";
        $result = mysqli_query($connection, $queryImg);
    }
}else{
    setcookie("notification", "Smještaj je uspješno unijet. Nije moguće učitati više od 6 slika.",time() + 3600*24, "/");setcookie("notification", "Smjestaj je uspjesno unijet. Nije moguce unijeti vise od 6 slika.",time() + 3600*24, "/");
    header("Location:indexAdmin.php");
}






