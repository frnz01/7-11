<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
    <title>Edit Product</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <h3 class="mb-4">Edit Product</h3>
                    <form action="<?php echo site_url('Inventory/edit') ?>" method="post">
                        <div class="form-group">
                            <label for="name">Product Id:</label>
                            <input type="text" id="id" name="id" class="form-control" required value="<?php echo $_GET['id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required value="<?php echo $_GET['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="stocks">Stocks:</label>
                            <input type="number" id="stocks" name="stocks" class="form-control" required value="<?php echo $_GET['stocks'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="Groceries" <?php echo ($_GET['category'] === 'Groceries') ? 'selected' : ''; ?>>Groceries</option>
                                <option value="Drinks" <?php echo ($_GET['category'] === 'Drinks') ? 'selected' : ''; ?>>Drinks</option>
                                <option value="Food and Beverages" <?php echo ($_GET['category'] === 'Food and Beverages') ? 'selected' : ''; ?>>Food and Beverages</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" id="price" name="price" class="form-control" required value="<?php echo $_GET['price'] ?>">
                        </div>
                        <a href="<?php echo site_url('Inventory') ?>" class="btn btn-secondary mr-2">Cancel</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
