<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    header("Location: products.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0.01" step="0.01" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" min="0" required>
    </div>
    <button type="submit">Add Product</button>
</form>

    </div>
</body>
</html>

