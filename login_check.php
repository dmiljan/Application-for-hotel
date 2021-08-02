<?php
if(isset($_REQUEST['email']) and isset($_REQUEST['password'])){
    session_start();
    require "connection/connection.php";

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $md5Password = md5($password);

    $queryUser = <<<SQL
        SELECT * 
        FROM user 
        WHERE email='$email' 
        AND password='$md5Password'
SQL;
    $resultUser = mysqli_query($connection, $queryUser);

    $queryGuest =  <<<SQL
        SELECT * 
        FROM guest 
        WHERE email='$email' 
        AND password ='$md5Password'
SQL;
    $resultGuest = mysqli_query($connection, $queryGuest);

    if(mysqli_num_rows($resultUser) > 0){
        $row = mysqli_fetch_assoc($resultUser);
        $_SESSION['user'] = $row;// ova sesija se koristi za fajl rezervation_check.php
        if($row['user_type_id'] == 1){
            $_SESSION['userAdmin'] = $row;
            header("Location: indexAdmin.php?name=hotelInfo");
        }else{
            $_SESSION['userWorker'] = $row;
            header("Location: indexAdmin.php?name=hotelInfo");
        }
    }else if (mysqli_num_rows($resultGuest) > 0){
        $row = mysqli_fetch_assoc($resultGuest);
        $_SESSION['user'] = $row;// ova sesija se koristi za fajl rezervation_check.php
        $_SESSION['userGuest'] = $row;
        header("Location: indexAdmin.php?name=hotelInfo");
    } else{
        setcookie("notification", "Prijava nije uspjela. Pogrešan e-mail ili lozinka.", time()+3600*24, "/");
        header("Location: login.php");
    }
}