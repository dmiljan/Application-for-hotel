<?php
if(isset($_REQUEST['email']) and isset($_REQUEST['password'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    require "connection/connection.php";
    $queryUser = "SELECT * FROM user WHERE email='".$email."' AND password ='".md5($password)."'; ";
    $resultUser = mysqli_query($connection, $queryUser);

    $queryGuest = "SELECT * FROM guest WHERE email='".$email."' AND password ='".md5($password)."'; ";
    $resultGuest = mysqli_query($connection, $queryGuest);

    if(mysqli_num_rows($resultUser) > 0){
        $row = mysqli_fetch_assoc($resultUser);
        session_start();
        $_SESSION['user'] = $row;// ova sesija se koristi za fajl rezervation_check.php
        if($row['user_type_id'] == 1){
            $_SESSION['userAdmin'] = $row;
            header("Location: indexAdmin.php");
        }else{
            $_SESSION['userWorker'] = $row;
            header("Location: indexAdmin.php");
        }
    }else if (mysqli_num_rows($resultGuest) > 0){
        $row = mysqli_fetch_assoc($resultGuest);
        session_start();
        $_SESSION['user'] = $row;// ova sesija se koristi za fajl rezervation_check.php
        $_SESSION['userGuest'] = $row;
        header("Location: indexAdmin.php");
    } else{
        setcookie("notification", "Prijava nije uspjjela. Pogrešan e-mail ili šifra.", time()+3600*24, "/");
        header("Location: login.php");
    }
}