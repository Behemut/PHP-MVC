<?php

function conectarDB(){
    $servername = $_ENV['address'];
    $username = $_ENV['username'];
    $password = $_ENV['password'];
    $dbname = $_ENV['dbname'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>