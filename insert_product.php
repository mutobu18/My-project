<?php 
// check if form was submited 

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    

    $product_name=$_POST['product_name'];
    $product_expirer_date=$_POST['product_expirer_date'];

    // sql querry 

    if($conn->querry($sql)==TRUE){

        echo "New product added to the system .";
    } else {

        echo "Error:".$sql."<br>".$conn->error;
    }

    // close database connection 

    $conn->close();

}