<?php


$servername="localhost";
$username="root";
$password="";
$dbname="mariadata";

// create connection 

$conn= new mysqli($servername,$username,$password,$dbname);

// check connection 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else 

{
  echo  "connected succesfully to the system";
}

?>