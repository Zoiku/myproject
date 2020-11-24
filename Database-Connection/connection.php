<?php 
    error_reporting(0);    

    $servername = 'localhost';
    $username = 'root';
    $password = getenv('MYSQL_ROOT') ?? '';
    $dbname = 'myproject';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Trouble connecting to database: ".mysqli_connect_error());
    }
?>