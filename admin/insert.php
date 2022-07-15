<?php
require("db_connect.php");
if (isset($_POST['create_category'])) {
    $name = $_POST['cat_name'];
    $img = $_POST['cat_img'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO `category` (`name`,`image`,`date`) VALUES ('$name','$img','$date')";
    $res = mysqli_query($con, $sql);
    header("Location:create_category.php");
}


if (isset($_POST['add_post'])) {
    $category_id = $_POST['cat_id'];
    $post_name = $_POST['post_name'];
    $post_desc = $_POST['post_desc'];
    $post_img = $_POST['post_img'];
    $post_link = $_POST['post_link'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO `posts` (`category_id`,`name`,`image`,`description`,`download_link`,`views`,`date`) 
            VALUES ('$category_id','$post_name','$post_img','$post_desc','$post_link','0','$date')";
    $res = mysqli_query($con, $sql);
    header("Location:create_post.php");
}