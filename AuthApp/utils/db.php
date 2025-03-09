<?php
$host="localhost";
$username="root";
$password=null;
$database="authapp";
$port='3310';

$conn = new mysqli($host, $username, $password, $database, $port);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

?>