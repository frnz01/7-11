<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
    <title>Add Purchase</title>
</head>
<body>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <h3 class="mb-4">Add Purchase</h3>
                    <form action="<?php echo site_url('Inventory/addPur') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" class="form-control" required value="<?php echo $_GET['id'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" id="price" name="price" class="form-control" required value="<?php echo $_GET['price'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" required>
                        </div>
                        <a href="<?php echo site_url('Inventory/purchase') ?>" class="btn btn-secondary mr-2">Cancel</a>
                        <button class="btn btn-primary" type="submit">Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>