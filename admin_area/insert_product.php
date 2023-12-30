<?php 
include '../includes/connect.php';
if(isset($_POST['insert_product'])){
        $product_title=$_POST['product_title'];
        $product_description=$_POST['Description'];
        $product_keywords=$_POST['product_keywords'];
        $product_category=$_POST['product_category'];
        $product_brand=$_POST['product_brand'];
        $product_price=$_POST['product_price'];
        $product_status="true";
        // Accessing images
        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];

        // accessing image tmp_name
        $temp_image1=$_FILES['product_image1']['tmp_name'];
        $temp_image2=$_FILES['product_image2']['tmp_name'];
        $temp_image3=$_FILES['product_image3']['tmp_name'];

        //checking empty condition
        if($product_title=='' or $product_description=='' or $product_keywords ==''  or $product_category=='' or 
        $product_brand=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
                   echo " <script>alert('please fill all the available fields')</script>";
                   exit();
                
        }else{
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            move_uploaded_file($temp_image2,"./product_images/$product_image2");
            move_uploaded_file($temp_image3,"./product_images/$product_image3");
        }
            // insert query

            $insert_products="insert into `products` (product_title,product_description,product_keywords,category_id,brand_id
            ,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description'
            ,'$product_keywords','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

            $result_query=mysqli_query($connection,$insert_products);
            if($result_query){
                echo "<script>alert('Successfully inserted the products')</script>";
            }else{
                echo mysqli_error($connection);
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Admin-Dashboard</title>
    <!-- css link -->
    <link rel="stylesheet" href="./style.css">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert  Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label ">Product title</label>
                <input type="text" name="product_title" id="product_title"class="form-control" placeholder="Enter product title" autocomplete="off" required="required" >
            </div>

            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label ">Product Description</label>
                <input type="text" name="Description" id="Description"class="form-control" placeholder="Enter product description" autocomplete="off" required="required" >
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label ">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords"class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required" >
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select " required="required">
                    <option value="">Select a category</option>
                    <?php
                    $select_query="Select * from `categories`;";
                    $result_query=mysqli_query($connection,$select_query);
                    while($row= mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                    }
                    
                    ?> 
                    
                </select> 
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select " required="required">
                    <option value="">Select a brand</option>
                    <?php
                    $select_query="Select * from `brands`;";
                    $result_query=mysqli_query($connection,$select_query);
                    while($row= mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    
                    ?>
                </select>
            </div>

            <!-- image -1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label ">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1"class="form-control" required="required" >
            </div>

            <!-- image -2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label ">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2"class="form-control" required="required" >
            </div>

            <!-- image -3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label ">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3"class="form-control" required="required" >
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label ">Product price</label>
                <input type="text" name="product_price" id="product_price"class="form-control" placeholder="Enter product price" autocomplete="off" required="required" >
            </div>

             <!-- price btn -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert products">
                </div>


        </form>
        
    </div>



<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
    
</body>
</html>