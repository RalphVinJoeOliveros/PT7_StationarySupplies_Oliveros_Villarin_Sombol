<?php
$username = 'root';
$password = '';
$host = 'localhost';
$db_name = 'stationary_supplies';

$connect = mysqli_connect($host, $username, $password, $db_name);

if($connect == TRUE){
    printf("Host information: %s\n ", mysqli_get_host_info($connect));
}
?>