<?php
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'result');

    $con = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if($con->connect_error){
        die("Database Connection Failied $con->connect_error");
    }
?>