<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "stationary_supplies";

    $mysqli = mysqli_connect($host, $username, $password, $db_name);

    if (mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        printf("Host information: %s\n", mysqli_get_host_info($mysqli));
    }
    
?>