<?php
session_start();
if(isset($_SESSION['userAdmin']) OR isset($_SESSION['userWorker']) OR isset($_SESSION['userGuest'])){
    session_unset();
    setcookie("notification", "Uspjesno ste se izlogovali.", time() + 3600*24, "/");
}
header("Location:index.php");