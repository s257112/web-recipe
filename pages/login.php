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
<?php 
    $User = new User($Conn);
    $error = '';
    if ($_POST) {
        // Check if 'reg' exists in the $_POST array
        if (isset($_POST['reg']) && $_POST['reg']) {
            // Registration form submitted
            if (!isset($_POST['email']) || !$_POST['email']) {
                $error = "Email not set";
            }
        else if(!$_POST['password']) {
            $error = "Password not set";
        }else if(!$_POST['password_confirm']) {
            $error = "Confirm password not set";
        }
        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email address is not valid";
        }
        else if ($_POST['password'] !== $_POST['password_confirm']) {
            $error = "Password and Confirm Password do not match";
        }
        else if (strlen($_POST['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        }
        if($error) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php
                
            }else{
                // Register user
                $attempt = $User->createUser($_POST);

               if($attempt) {
                 ?>
              <div class="alert alert-success" role="alert">
                       User created - Please login!
             </div>
             <?php
         }else{
          ?>
        <div class="alert alert-danger" role="alert">
            An error occurred, please try again later.
        </div>
        <?php
         }
        }
     } else if($_POST['login']) {
            // Login form submitted
            if(!$_POST['email']){
                $error = "Email not set";
            }
            else if(!$_POST['password']) {
                $error = "Password not set";
            }
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Email address is not valid";
            }
           
            else if (strlen($_POST['password']) < 8) {
                $error = "Password must be at least 8 characters in length";
            }
            if($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php
                }else{
                    // Attempt to login user
                    $user_data = $User->loginUser($_POST);
                    if($user_data) {
                        // Credentials correct
                        $_SESSION['is_loggedin'] = true;
                        $_SESSION['user_data'] = $user_data;
                        ?>
                    <div class="alert alert-success" role="alert">
                        You have been logged in, welcome back!
                      </div>
                     <?php
                    }else{
                        // Credentials incorrect
                        ?>
                            <div class="alert alert-danger" role="alert">
                                Login credentials are incorrect.
                            </div>
                        <?php
                    }
                     
                }
                
                

            } 
        
    }
    
?>
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
                    <button type="submit" name="reg" value="1" class="btn btn-primary">Register</button>
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
                    <button type="submit" name="login" value="1" class="btn btn-studenteat">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src=".\node_modules\jquery\dist\jquery.min.js"></script>
    <script type="text/javascript" src=".\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>

</body>

</html