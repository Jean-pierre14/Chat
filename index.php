<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Racine14 | chat</title>
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.chat.css">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Real Chat App</header>
            <form action="" method="post">
                <div class="error-txt">This is error</div>
                <div class="name-details">
                    <div class="field one input">
                        <label for="fn">First name</label>
                        <input type="text" id="fn" name="fn" placeholder="First name">
                    </div>
                    <div class="field input">
                        <label for="ln">Last name</label>
                        <input type="text" id="ln" name="ln" placeholder="Last name">
                    </div>
                </div>
                <div class="field input">
                    <label for="em">Email</label>
                    <input type="email" id="em" name="em" placeholder="Email@racine24.com">
                </div>
                <div class="field input">
                    <label for="ps">Password</label>
                    <input type="password" id="ps" name="ps" placeholder="Password">
                </div>
                <div class="field img">
                    <label for="img">Select Image</label>
                    <input type="file" id="img" name="img">
                </div>
                <div class="field input">
                    <button type="submit">Create an account</button>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
</body>

</html>