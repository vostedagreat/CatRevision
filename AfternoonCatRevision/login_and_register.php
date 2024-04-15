<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Register</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body class="loginRegisterBody">
    <section>
        <div class="row contentDiv">
            <div class="col-2"></div>
            <div class="col-4 contentLeft">
                <h4>Login here</h4>
                <form method="post" action="login_handler.php">
                    <label>Username</label>
                    <input class="form-control" name="u_name" type="text">
                    <label>Password</label>
                    <input class="form-control" name="u_pass" type="password"><br>
                    <input class="btn btn-danger" name="btn_login" value="Login" type="submit">
                </form>
            </div>
            <div class="col-4 contentRight">
                <h4>Register here</h4>
                <form method="post" action="register_handler.php">
                    <label>Username</label>
                    <input class="form-control" name="u_name" type="text">
                    <label>Password</label>
                    <input class="form-control" name="u_pass" type="password"><br>
                    <input class="btn btn-success" name="btn_register" value="Register" type="submit">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </section>

</body>
</html>

