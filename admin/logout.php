<?php
require "db_connect.php";
session_start();
unset($_SESSION['loggedin']);
session_destroy();
mysqli_query($con, "UPDATE `users` SET `status`='1'");
$id = $_SESSION['id'];
mysqli_query($con, "UPDATE `users` SET `status`='0' WHERE `id`='$id'");

header("location:login.php");