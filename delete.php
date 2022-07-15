<?php
$conn = mysqli_connect("localhost" , "root" , "" , "ajaxcrud");
$id = $_GET['id'];
$delete="DELETE FROM `table` WHERE `id` = '$id'";
$query = mysqli_query($conn, $delete);
if($query) {
    header("location:index.php");
}
?>