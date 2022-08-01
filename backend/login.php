<?php
    include_once "./config.php";

    $em = mysqli_real_escape_string($con, htmlentities(trim($_POST['em'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['ps'])));

    if(empty($em)){
        print "Email is required";
    }else{
        if(empty($password)){
            print "Password is required :(";
        }else{
            $pass = md5($password);
            $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '{$em}' AND `password` = '{$pass}'");
            if($sql){
                $sql2 = mysqli_query($con, "UPDATE user SET `status` = 'Active now'");
                if($sql2){
                    
                    session_start();

                    $row = mysqli_fetch_assoc($sql);
                    
                    $_SESSION['unique_id'] = $row['unique_id'];
                    
                    print "success";
                }else{
                    print "Something went wrong";
                }
            }else{
                print "Something went wrong";
            }
            
        }
    }

?>