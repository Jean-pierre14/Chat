<?php include_once "./header.php";?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Real Chat App</header>
            <form action="" method="post">
                <div class="error-txt">This is error</div>

                <div class="field input">
                    <label for="em">Email</label>
                    <input type="email" id="em" name="em" placeholder="Email@racine24.com">
                </div>
                <div class="field input">
                    <label for="ps">Password</label>
                    <input type="password" id="ps" name="ps" placeholder="Password">
                    <i class="fa fa-eye"></i>
                </div>

                <div class="field input">
                    <button type="submit">Log In</button>
                </div>
            </form>
            <div class="link">I don't have an account <a href="index.php">Sign Up</a></div>
        </section>
    </div>
    
    <script src="./assets/js/password_show_hied.js"></script>
</body>

</html>