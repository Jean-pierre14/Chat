<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "./config.php";

        $outgoing_id = mysqli_real_escape_string($con, htmlentities(trim($_POST['outgoing_id'])));
        $incoming_id = mysqli_real_escape_string($con, htmlentities(trim($_POST['incoming_id'])));
        $output = "";

        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($con, $sql);
        
        if($query){
            if(mysqli_num_rows($query) > 0){
            
                while($row = mysqli_fetch_assoc($query)){
                    if($row['outgoing_msg_id'] === $outgoing_id){
                        $output .= '
                        <div class="chat outgoing">
                            <div class="details">
                                <p>
                                    '.$row['msg'].'
                                </p>
                            </div>
                        </div>
                        ';
                    }else{
                        $output .= '
                        <div class="chat incoming">
                            <img src="./assets/img/'.$row['img'].' " alt="Profil-userName">
                            <div class="details">
                                <p>
                                    '.$row['msg'].'
                                </p>
                            </div>
                        </div>
                        ';
                    }
                }
            }else{
                $output = 'No available message for you';
            }
        }else{
            $output = '<div class="error-txt">Sql error</div>';
        }
        print $output;
    }else{
        header("location: ../login.php");
    }


?>