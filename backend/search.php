<?php

    include_once "./config.php";
    $output = '';
    $searchText = mysqli_real_escape_string($con, htmlentities(trim($_POST['searchText'])));

    $sql = mysqli_query($con, "SELECT * FROM users WHERE fname LIKE '%{$searchText}%' OR lname LIKE '%{$searchText}%' OR email LIKE '%{$searchText}%'");

    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= 'No user found related to your search';
    }
    print $output;