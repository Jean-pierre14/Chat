<?php

    session_start();
    include_once "./config.php";

    $output = '';
    $outgoing_id = $_SESSION['unique_id'];
    $searchText = mysqli_real_escape_string($con, htmlentities(trim($_POST['searchText'])));

    $sql = mysqli_query($con, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchText}%' OR lname LIKE '%{$searchText}%' OR email LIKE '%{$searchText}%')");

    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= 'No user found related to your search';
    }
    print $output;