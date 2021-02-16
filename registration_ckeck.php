<?php
if($_REQUEST['userList'] != 0 and isset($_REQUEST['firstname']) and isset($_REQUEST['lastname']) and isset($_REQUEST['email']) and isset($_REQUEST['password']) and isset($_REQUEST['passwordRepeat'])){

    $userId = $_REQUEST['userList'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $passwordRepeat = $_REQUEST['passwordRepeat'];

    if($password == $passwordRepeat){
        require "connection/connection.php";

        if($userId == 1) {
            $query ="INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `name_workplace`, `date_employment`, `user_type_id`) VALUES ('$firstname', '$lastname', '$email', '".md5($password)."', '', '', '$userId')";
        } else if($userId== 2 and isset($_REQUEST['nameWorkspace']) and isset($_REQUEST['dateEmployment'])){
            $nameWorkspace = $_REQUEST['nameWorkspace'];
            $dateEmployment = $_REQUEST['dateEmployment'];
            $query ="INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `name_workplace`, `date_employment`, `user_type_id`) VALUES ('$firstname', '$lastname', '$email', '".md5($password)."', '$nameWorkspace', '$dateEmployment', '$userId')";
        } else if($userId == 3){
            $query = "INSERT INTO `guest`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '".md5($password)."')";
        }

        $result = mysqli_query($connection, $query);
        header("Location:indexAdmin.php?name=registration");
    }
}
