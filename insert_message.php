<?php 

$Name=$_POST['name'];
$Email=$_POST['email'];
$Message=$_POST['message'];


$sql="INSERT INTO messages (Name,Email,Message)VALUES ($Name,$Email,$Message)";

//execute sql querry 

if($conn->querry($ql)==TRUE){

    echo "New message submited in the system successfully!";

}else {
    echo "error:".$sql."<br>".$conn->error;
}

$close->$conn();

?>
