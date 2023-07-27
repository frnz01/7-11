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

                        <li class="<?php if ($location === 'new_item') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory') ?>">
                                <i class="fa fa-plus"></i> Add Products
                            </a>
                        </li>

                        <li class="<?php if ($location === 'sales') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory') ?>">
                                <i class="fa fa-shopping-cart"></i> Purchase Products
                            </a>
                        </li>

                        <li class="<?php if ($location === 'categories') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory') ?>">
                                <i class="fa fa-list"></i> Purchase Records
                            </a>
                        </li>

                        <li class="<?php if ($location === 'accounts') {
                            echo 'active';
                        } ?>">
                            <a href="<?php echo site_url('Inventory') ?>">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-10">
                <!-- Content for the Manage Inventory page -->
                <h1>Welcome to the Manage Inventory Page!</h1>
                <!-- Add your inventory management content here -->
            </div>
        </div>
    </div>




</body>

</html>