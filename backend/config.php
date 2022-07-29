<?php

    $con = mysqli_connect("localhost", "root", "", "chat");

    if(!$con)
        echo "DATABASE connected " . mysqli_connect_error();
?>