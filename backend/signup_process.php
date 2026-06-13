<?php
require_once '../inc/connection.php';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql =  " INSERT INTO `users` (`name`, `username`, `password`) VALUES ('$name', '$email', '$password')    ";
$res = mysqli_query($con , $sql);

if ($res) {
    header('location:../index.php');
} else {
    header('location:../signup.php');
}



?>