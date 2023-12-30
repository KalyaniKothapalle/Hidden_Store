<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Font-Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- navigation bar -->
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/image1.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Welcome guest
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </nav>

        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/pineapplejuice.jpeg" class="admin_image" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">

                    <!-- button*10>a.nav-link.text-light.bg-info.m-1 -->
                    <button class="my-2"><a href="insert_product.php" class="nav-link text-light bg-info m-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info m-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1"> All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">All Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">List Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1">Log Out</a></button>
                </div>
            </div>


        </div>
        <div class="bg-info p-2 text-center footer">
            <p>All rights reserved ©- Designed by Kalyani-2022</p>
        </div>

    </div>

    <!-- Fourth child -->
    <div class="container my-5">
        <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
        ?>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>