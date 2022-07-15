<?php
    if(isset($_GET['logout'])){
        // echo "you clicked the logout button";
        session_start();
        session_destroy();
        header("location:login.php");
    }
    else{
        echo "not clicked";
    }
?>