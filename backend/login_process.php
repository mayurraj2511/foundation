<?php
require_once '../inc/connection.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = " SELECT * FROM `users` WHERE `username` = '$email' ";
$res = mysqli_query( $con, $sql);

if  ( mysqli_num_rows($res) > 0 ) {
    $row = mysqli_fetch_assoc($res);
    $dbpass = $row['password'];

    if ( $dbpass == $password) {
        header('location:../index.php');
    } else {
        header('location:../login.php?msg=wrong password');
    }
} else {
    echo'try again';
}

?>