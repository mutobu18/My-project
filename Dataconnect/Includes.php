<?php 
include 'db_connect.php';

//process from submission 
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $prodcut_expirer_date=$_POST['product_expirer_date'];

    //sql querry to insert data into products table 

    $sql="INSERT INTO products(product_name,product_price,product_expirer_date)VALUES('$product_name',$product_price',$product_expirer_date')";

    if($conn->query($sql)===TRUE){
        echo "Product added successfully";
    } else {

        echo "error : " .$sql."<br>".$conn->error;
    }

    // close database connection 

    $conn->close();
}
