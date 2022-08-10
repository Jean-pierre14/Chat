<?php include_once "./header.php";?>

<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("Location: users.php");
    }

?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Real Chat App</header>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="error-txt">This is error</div>
                <div class="name-details">
                    <div class="field one input">
                        <label for="fn">First name</label>
                        <input type="text" id="fn" name="fn" autocomplete="off" placeholder="First name" required/>
                    </div>
                    <div class="field input">
                        <label for="ln">Last name</label>
                        <input type="text" id="ln" name="ln" autocomplete="off" placeholder="Last name" required/>
                    </div>
                </div>
                <div class="field input">
                    <label for="em">Email</label>
                    <input type="email" id="em" name="em" autocomplete="off" placeholder="Email@racine24.com" required/>
                </div>
                <div class="field input">
                    <label for="ps">Password</label>
                    <input type="password" id="ps" name="ps" autocomplete="off" placeholder="Password" required/>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field img">
                    <label for="img">Select Image</label>
                    <input type="file" id="img" name="img" required/>
                </div>
                <div class="field input button">
                    <button type="submit">Create an account</button>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
</body>

<script src="./assets/js/password_show_hied.js"></script>
<script src="./assets/js/signup.js"></script>

</html>