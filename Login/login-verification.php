<?php 
    session_start();
?>

<?php require_once '../Database-Connection/connection.php';
    $username = $_POST['username'];
    $userpassword = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' and userpassword = '$userpassword' ";
    $result = mysqli_query($conn, $query);

    if(isset($_SESSION['username'])){
        echo "<script>location.href='../stockindex.php'</script>";     
    } 
    else{
        if(!mysqli_num_rows($result) > 0){
            echo "username or password invalid";
            echo "<script>location.href='login.php'</script>";
        }
        else{
            $_SESSION['username'] = $username;
            echo "<script>location.href='login-verification.php'</script>";     
        }
    }
?>
