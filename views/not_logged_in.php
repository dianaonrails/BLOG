<html>
<head>
    <title>BLOG</title>
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="login">
    <?php
        // show potential errors / feedback (from login object)
        if (isset($login)) {
            if ($login->errors) {
                foreach ($login->errors as $error) {
                    echo $error;
                }
            }
            if ($login->messages) {
                foreach ($login->messages as $message) {
                    echo $message;
                }
                
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="four columns login-form login-form--center">
                    <!-- login form box -->
                    <form method="post" action="index.php" name="loginform">

                        <label for="login_input_username">Username</label>
                        <input id="login_input_username" class="login_input" type="text" name="user_name" required />

                        <label for="login_input_password">Password</label>
                        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

                        <input type="submit"  name="login" value="Log in" class="button-primary" />

                    </form>

                    <a href="register.php">Register new account</a>
                </div>
            </div>
        </div>    
    </div>
</div>
</body>
</html>