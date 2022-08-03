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

                session_start();

                $row = mysqli_fetch_assoc($sql);
                    
                $_SESSION['unique_id'] = $row['unique_id'];

                $status = 'Active now';

                $sql2 = mysqli_query($con, "UPDATE users SET `status` = '{$status}' WHERE unique_id = {$row['unique_id']}");

                if($sql2) {
                    
                    
                    
                    print "success";

                }else{
                    print "Something went wrong Sql ". $row['unique_id'];
                }
            }else{
                print "Something went wrong";
            }
            
        }
    }

?>