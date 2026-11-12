<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

echo "Database Connected Successfully";

?>