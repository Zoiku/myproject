<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>

        <link rel="stylesheet" href="../Css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        <!-- JQuery File -->
        <script src="../JQuery/jquery-3.5.1.js"></script>
        <script src="signupverification.js"></script>
    </head>

    <body>
        <nav class="nav-bar">
            <a href="../index.php">Home</a>
            <a class="nav-active-page" href="../Login/login.php">Login</a>

            <div class="nav-animation"></div>
        </nav>

        <div class="form-container" id="signup-form-container">
            <form id="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validation()">
                <header>Sign up</header>

                <div class="field">
                    <div class="input-field">
                        <input name='name' id='name' type="text" autocomplete="off" placeholder='&#xf007;' required>
                        <label class='label-name'>
                            <span class='content-name'>Full Name</span>
                        </label>
                    </div>
                    <span id="error-1" class="error-message">Name length must be between 8-30 characters</span>
                </div>

                <div class="field">
                    <div class="input-field">
                        <input name='username' id='username' type="text" autocomplete="off" placeholder='&#xf007;' required>
                        <label class='label-name'>
                            <span class='content-name'>Username</span>
                        </label>
                    </div>
                    <span id="error-2" class="error-message">Username taken</span>
                </div>

                <div class="field">
                    <div class="input-field">
                        <input name='password' id='password' type="password" autocomplete="off" placeholder='&#xf023;' required>   
                        <label class='label-name'>
                            <span class='content-name'>Password</span>
                        </label>
                    </div>
                    <span id="error-3" class="error-message">Password length must between 8-30 characters</span>
                </div>

                <div class="field">
                    <div class="input-field">
                        <input name='re-password' id='re-password' type="password" autocomplete="off" placeholder='&#xf023;' required>   
                        <label class='label-name'>
                            <span class='content-name'>Repeat-Password</span>
                        </label>
                    </div>
                    <span id="error-4" class="error-message">Password incorrect: Retype</span>
                </div>
                
                <div class="authentication">
                    <button name='submit-btn' type='submit' class='button' id='signup-button'>Get Started</button>
                    <p>By clicking this thing you are agreeing to all <a href="#">terms and conditions</a></p>
                </div>
            </form>

            <div id="login-account" class="signup-login">
                <hr>
                <div>
                    <p>Already own an account? <a href="../Login/login.php">Login</a></p>
                </div>
            </div>
        </div>

        <?php include_once '../Database-Connection/connection.php'; 
            $fullname = $_POST['name'];
            $username = $_POST['username'];
            $userpassword = $_POST['password'];
            $submit = $_POST['submit-btn'];

            if(isset($submit)){
                $query = "INSERT INTO `users`(`fullname`, `username`, `userpassword`) VALUES ('$fullname', '$username', '$userpassword')";
                $result = mysqli_query($conn, $query);

                header("location:../Login/login.php");
            }else{
                die();
            }
        ?>
    </body>
</html>