<?php
    session_start();

    include_once "./config.php";

    $unique_id = $_SESSION['unique_id'];

    $output = '';

    $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id != {$unique_id}");

    if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }else{
        $output = "No user available";
    }

    echo $output;