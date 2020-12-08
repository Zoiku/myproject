<?php require_once '../Database-Connection/connection.php';
    $username = $_POST['usernameinput'];

    $query = "SELECT * FROM `users` where username = '$username';";
    $result = mysqli_query($conn, $query);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        echo "$username";
    } else die();
?>