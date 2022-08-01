<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '
        <a href="chat.php?user_id='.$row['unique_id'].'">
                <div class="content">
                    <img src="./assets/img/'.$row['img'].'" alt="Profil-'.$row['fname'].'">
                    <div class="detail">
                        <span>
                            '.$row['fname'].' '.$row['lname'].'
                        </span>
                        <p>This is the text message</p>
                    </div>
                </div>
                <div class="status-dot">
                    <div class="fas fa-circle"></div>
                </div>
            </a>
        ';
    }
?>

