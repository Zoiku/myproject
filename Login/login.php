<?php 
    session_start();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="stylesheet" href="../Css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        <!-- JQuery File -->
        <script src="../JQuery/jquery-3.5.1.js"></script>

    </head>

    <body>
        <nav class="nav-bar">
            <a href="../index.php">Home</a>
            <a class="nav-active-page" href="../Login/login.php">Login</a>
        </nav>   

        <div class="form-container" id="login-form-container">
            <form action="login-verification.php" id="form" method='POST'>
                <header>Login up</header>

                <div class="field">
                    <div class="input-field">
                        <input name='username' id='username' type="text" autocomplete="off" placeholder='&#xf007;' required>
                        <label class='label-name'>
                            <span class='content-name'>Username</span>
                        </label>
                    </div>
                    <span id="error-1" class="error-message">Invalid Username</span>
                </div>

                <div class="field">
                    <div class="input-field">
                        <input name='password' id='password' type="password" autocomplete="off" placeholder='&#xf023;' required>   
                        <label class='label-name'>
                            <span class='content-name'>Password</span>
                        </label>
                    </div>
                </div>

                <div class="authentication">
                    <button name='submit-btn' type='submit' class='button' id='login-button'>Login</button>
                </div>
            </form>

            
            <div id="create-account" class="signup-login">
                <hr>
                <div>
                    <p>Need an account?  <a href="../SignUp/signup.php">Create account</a></p>
                </div>
            </div>
        </div>
    </body>
</html>

