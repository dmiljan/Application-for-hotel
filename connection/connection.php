<?php
$connection = mysqli_connect("localhost", "root","","hotel");
mysqli_set_charset($connection,'utf8');
if(!$connection){
    die("Connection error!");
}