<?php include_once "./header.php";?>

<body>
    <div class="wrapper">
        <section class="users">
            <?php
                include_once "./backend/config.php";
                $uniqueId = $_SESSION['unique_id'];
                $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$uniqueId}");
                
                if(mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }else{
                    header("location: ./login.php");
                }
            ?>
            <header>
                <div class="content">
                    <img src="./assets/img/<?= $row['img'];?>" alt="Profil">
                    <div class="details">
                        <p><?= $row['fname'] . " " . $row['lname'];?></p>
                        <span><?= $row['status'];?></span>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to chat</span>
                
                <input type="text" class="searchText" placeholder="Typing...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="user-list">
                <a href="#">
                    <div class="content">
                        <img src="./assets/img/racine14.jpg" alt="Profil-name">
                        <div class="detail">
                            <span>
                                Racine14
                            </span>
                            <p>This is the text message</p>
                        </div>
                    </div>
                    <div class="status-dot offline">
                        <div class="fas fa-circle"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./assets/img/racine14.jpg" alt="Profil-name">
                        <div class="detail">
                            <span>
                                Racine14
                            </span>
                            <p>This is the text message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <div class="fas fa-circle"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="./assets/img/racine14.jpg" alt="Profil-name">
                        <div class="detail">
                            <span>
                                Racine14
                            </span>
                            <p>This is the text message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <div class="fas fa-circle"></div>
                    </div>
                </a>                
                
            </div>
        </section>
    </div>

</body>
<script src="./assets/js/users.js"></script>

</html>