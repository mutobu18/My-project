<?php

$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

?>