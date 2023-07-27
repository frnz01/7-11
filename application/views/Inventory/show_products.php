<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?>">

    <style>
        .sidebar {
            background-color: #2c3e50;
            color: #fff;
            height: 100vh;
            padding-top: 20px;
            padding-left: 10px;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .menu a i {
            margin-right: 10px;
        }

        .menu a:hover {
            background-color: #34495e;
        }

        .menu .active a {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <header style="height: 60px; background: rgba(45, 38, 38, 0.5); color: white;" class="">
        <div style="padding-left: 20px; padding-top: 2px;">
            <h2 style="margin: 0">7-Eleven System</h2>
            <p style="margin: 0;">By: Winner John Udaundo</p>
        </div>
    </header>
    <div class="">
        <div class="row">
            <div class="col-sm-2" id="side-menu">
                <div class="sidebar">
                    <ul class="menu">
                        <?php
                        $location = $this->uri->segment(1);
                        ?>
                        <li class="<?php if ($location === 'Inventory') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory') ?>">
                                <i class="fa fa-cubes"></i> Manage Inventory
                            </a>
                        </li>

                        <li class="<?php if ($location === 'Inventory/addProd') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory/addProd') ?>">
                                <i class="fa fa-plus"></i> Add Products
                            </a>
                        </li>

                        <li class="<?php if ($location === 'Inventory/purchase') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory/purchase') ?>">
                                <i class="fa fa-shopping-cart"></i> Purchase Products
                            </a>
                        </li>

                        <li class="<?php if ($location === 'Inventory/records') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory/records') ?>">
                                <i class="fa fa-list"></i> Purchase Records
                            </a>
                        </li>

                        <li class="<?php if ($location === 'Inventory/back') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory/back') ?>">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-10 p-20 content">
                <a href="<?php echo site_url('Inventory/addProd')?>">
                    <button class="btn btn-primary sm-btn">+ Add</button>
                </a>
                <table class="table table-striped table-hover">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Stocks</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td colspan="2">Action</td>
                    </tr>
                    <?php foreach ($products as $prod): ?>

                        <tr>
                            <td><?php echo $prod->id ?></td>
                            <td><?php echo $prod->name ?></td>
                            <td><?php echo $prod->stocks ?></td>
                            <td><?php echo $prod->category ?></td>
                            <td><?php echo $prod->price ?></td>
                            <td>
                                <a href="<?php echo site_url('Inventory/showEdit?id=' . $prod->id . '&name=' . $prod->name . '&stocks=' . $prod->stocks . '&category=' . $prod->category . '&price=' . $prod->price) ?>">
                                    <button class="btn btn-primary sm-btn">Edit</button>
                                </a>    
                            </td>
                            <td>
                                <a href="<?php echo site_url('Inventory/delete/' . $prod->id) ?>">
                                    <button class="btn btn-primary sm-btn">Delete</button>
                                </a>   
                            </td>
                        </tr>
                        
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>




</body>

</html>