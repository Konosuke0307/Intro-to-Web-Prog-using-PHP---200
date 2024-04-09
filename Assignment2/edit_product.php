<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" value="<?php echo $product_name; ?>" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?php echo $price; ?>" min="0.01" step="0.01" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="<?php echo $stock; ?>" min="0" required>
    </div>
    <button type="submit">Save Changes</button>
</form>

    </div>
</body>
</html>

