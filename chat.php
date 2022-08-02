<?php include_once "./header.php";?>

<body>
    <div class="wrapper">
        <?php
            include_once "./backend/config.php";
            $user_id = mysqli_real_escape_string($con, $_GET['user_id']);

            $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$user_id}");
            $row = mysqli_fetch_assoc($sql);
        ?>
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="./assets/img/<?= $row['img'];?>" alt="Profile-User">
                <div class="details">
                    <p><?= $row['fname'] . ' ' . $row['lname'];?></p>
                    <span>
                        <?= $row['status'];?>
                    </span>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="./assets/img/racine14.jpg" alt="Profil-userName">
                    <div class="details">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, sequi repudiandae voluptatibus laboriosam tempore incidunt dolores alias aut. Eligendi ducimus repudiandae assumenda officia, dolorem voluptatem! Debitis officiis expedita eos sed.
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="./assets/img/racine14.jpg" alt="Profil-userName">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="./assets/img/racine14.jpg" alt="Profil-userName">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <form action="#" method="post" class="typing-area">
                
                <input type="text" class="searchText" name="outgoing_id" hidden value="<?= $_SESSION['unique_id'];?>" />
                
                <input type="text" class="searchText" name="incoming_id" hidden value="<?= $user_id;?>"/>
                
                <input type="text" name="message" class="input-field" autofocus placeholder="Type a message here..."/>
                
                <button type="button">
                    <i class="fab fa-telegram-plane"></i>
                </button>
            </form>
        </section>
    </div>
</body>
    <script src="./assets/js/chat.js"></script>

</html>