<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/styles.css">

    <!-- Link to a favicon (small icon in browser tab) -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/52d99f0fc0.js" crossorigin="anonymous"></script>

    <title>Quick and affordable student recipes – StudentEat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

</head>

<body id="page-login">

    <div class="container">
        <h1 class="pb-2">Login or Register</h1>
        <div class="row">
            <div class="col-md-3">
                <form id="registration-form"  method="post" action="">
                    <div class="form-group pb-2">
                        <label for="reg_email">Email address</label>
                        <input type="email" class="form-control pb-2" id="reg_email" name="email">
                    </div>
                    <div class="form-group pb-2">
                        <label for="reg_password">Password</label>
                        <input type="password" class="form-control pb-2" id="reg_password" name="password">
                    </div>
                    <div class="form-group pb-2">
                        <label for="reg_password_confirm">Confirm Password</label>
                        <input type="password" class="form-control pb-2" id="reg_password_confirm" name="password_confirm">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-md-3">
                <form id="login-form" method="post" action="">
                    <div class="form-group pb-2">
                        <label for="login_email">Email address</label>
                        <input type="email" class="form-control pb-2" id="login_email" name="email">
                    </div>
                    <div class="form-group pb-2">
                        <label for="login_password">Password</label>
                        <input type="password" class="form-control pb-2" id="login_password" name="password">
                    </div>
                    <button type="submit" class="btn btn-studenteat">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src=".\node_modules\jquery\dist\jquery.min.js"></script>
    <script type="text/javascript" src=".\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>

</body>

</html