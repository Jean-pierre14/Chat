<?php
    session_start();
    // echo "Hello";
    include_once "./config.php";

    $fn = mysqli_real_escape_string($con, htmlentities(trim($_POST['fn'])));
    $ln = mysqli_real_escape_string($con, htmlentities(trim($_POST['ln'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['em'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['ps'])));

    if(empty($fn)){
        echo "First name is empty";
    }else{
        if(empty($ln)){
            echo "Last name is empty";
        }else{
            if(empty($email)){
                echo "Email is empty";
            }else{
                if(empty($password)){
                    echo "Password is blank";
                }else{
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        $sql = mysqli_query($con, "SELECT email FROM users WHERE email = '{$email}'");
                        if(mysqli_num_rows($sql) > 0){
                            echo "$email - already exist :(";
                        }else{
                            if(isset($_FILES['img'])){
                                $img_name = $_FILES['img']['name'];
                                $img_type = $_FILES['img']['type'];
                                $tmp_name = $_FILES['img']['tmp_name'];
            
                                // Explode image and get the last extension 
                                $img_explode = explode('.', $img_name);
                                $img_ext = end($img_explode); // Here we get the extension
            
                                $extension = ['png', 'jpeg', 'jpg'];
                                
                                if(in_array($img_ext, $extension) === true){ 
                                    
                                    $time = time();
                                    $new_name_img = $time.$img_name;
                                    if(move_uploaded_file($tmp_name, "../assets/img/".$new_name_img)){
                                        $status = "Active now";
                                        $pass = md5($password);

                                        $randomId = rand(time(), 10000000);
                                        $sql2 = mysqli_query($con, "INSERT INTO users(unique_id, fname, lname, email, `password`, img, `status`) VALUES({$randomId}, '{$fn}', '{$ln}', '{$email}', '{$pass}',  '{$new_name_img}', '{$status}')");
            
                                        if($sql2){
                                            $sql3 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");

                                            if($sql3){
                                                if(@mysqli_num_rows($sql3) > 0) {
                                                    $row = mysqli_fetch_assoc($sql3);
                                                    $_SESSION['unique_id'] = $row['unique_id'];
                                                    echo "success";
                                                }
                                            }else{
                                                echo "Error sql";
                                            }
                                        }else{
                                            echo "Something went wrong";
                                        }
                                    }
                                    
                                }else{
                                    echo "Please select an Image file - Png, jpeg or jpg";
                                }
            
                            }else{
                                echo "Please select an image";
                            }
                        }
                    }else{
                        echo "$email - This is not a valid email";
                    }
                }
            }
        }
    }


?>