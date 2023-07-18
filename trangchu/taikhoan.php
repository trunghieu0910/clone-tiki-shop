<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Webleb</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="display:flex; align-items:center; justify-content:center;">
    p
    <div class="login-page">
        <div class="form">
            <form class="register-form" method="POST">
                <h2>Register</h2>
                <input type="text" placeholder="Full Name *" required/>
                <input type="text" placeholder="Username *" required/>
                <input type="email" placeholder="Email *" required/>
                <input type="password" placeholder="Password *" required/>
                <a class="btn" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> Create
                </a>
                <p class="message">Already registered? <a href="../BAOSTORE_FINAL/admin/index.php">Sign In</a></p>
            </form>
            <form class="login-form" method="post">
                <h2>
                    </i> Login</h2>
                <input type="text" placeholder="Username" required />
                <input type="password" placeholder="Password" required/>
                <a class="btn" href="../BAOSTORE_FINAL/admin/index.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> Sign in
                </a>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
<script>$('.message a').click(function() {
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});</script>