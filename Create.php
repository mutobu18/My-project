<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new product</title>

</head>
<body>
    <h2>Add new product</h2>
    <form action="Insert_product.php" method="post">

    <label for="product_name">Product name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="product_expirer_date">Product expirer date:</label>
    <input type="text" id="product_expirer_date" name="product_expirer-date" >

    <input type="submit"  value="Add product">

</form>
</body>
</html>