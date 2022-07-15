<?php
require "db_connect.php";


if (isset($_POST['delete_admin'])) {


  $id = $_POST['admin_delete_id'];

  $sql = "DELETE FROM `admin_users` WHERE `id`='$id'";

  $res = mysqli_query($con, $sql);
  if ($res) {
    header("Location: users.php");
  } else {
    header("Location: users.php");
  }
}

?>


<?php


if (isset($_GET['cat_id'])) {


  $id = $_GET['cat_id'];

  $sql = "DELETE FROM `category` WHERE `id`='$id'";

  $res = mysqli_query($con, $sql);
  if ($res) {
    header("Location: category.php");
  } else {
    header("Location: category.php");
  }
}

if (isset($_GET['post_id'])) {


  $id = $_GET['post_id'];

  $sql = "DELETE FROM `product` WHERE `id`='$id'";

  $res = mysqli_query($con, $sql);
  if ($res) {
    header("Location: products.php");
  } else {
    header("Location: products.php");
  }
}


?>