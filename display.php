<?php

$conn = new mysqli("localhost", "root", "", "college");

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "ID: " . $row["id"] .
             " Name: " . $row["name"] .
             " Course: " . $row["course"] . "<br>";
    }

} else {
    echo "No Records Found";
}

$conn->close();

?>