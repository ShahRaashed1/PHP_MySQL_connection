<?php

$conn = new mysqli("localhost", "root", "", "college");

$name = $_POST['name'];
$course = $_POST['course'];

$sql = "INSERT INTO students(name, course)
        VALUES('$name','$course')";

if($conn->query($sql) === TRUE){
    echo "Record Inserted Successfully";
}else{
    echo "Error: " . $conn->error;
}

$conn->close();

?>