<?php

// including connect file
// include './includes/connect.php';

// getting products 

function getproducts(){
    global $connection;

    // condition to check isset or not

    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

        

    $select_query="Select * from `products` order by rand() limit 0,9;";
                    $result_query=mysqli_query($connection,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                            </div>
                        </div>

                    </div>";


                    }
}
}
}

// getting all products
function get_all_products(){
    global $connection;

    // condition to check isset or not

    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

        

    $select_query="Select * from `products` order by rand();";
                    $result_query=mysqli_query($connection,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>                            </div>
                        </div>

                    </div>";


                    }
}
}
}


// getting unique categories
function get_unique_categories(){
    global $connection;
    // condition to check isset or not
    if(isset($_GET['category'])){
                    $category_id=$_GET['category'];
                    $select_query="Select * from `products` where category_id = $category_id";
                    $result_query=mysqli_query($connection,$select_query);
                    $num_of_rows=mysqli_num_rows($result_query);
                    if($num_of_rows==0){
                        echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
                    }
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>                            </div>
                        </div>

                    </div>";


                    }
}
}


// getting unique brands
function get_unique_brands(){
    global $connection;
    // condition to check isset or not
    if(isset($_GET['brand'])){
                    $brand_id=$_GET['brand'];
                    $select_query="Select * from `products` where brand_id = $brand_id";
                    $result_query=mysqli_query($connection,$select_query);
                    $num_of_rows=mysqli_num_rows($result_query);
                    if($num_of_rows==0){
                        echo "<h2 class='text-center text-danger'> Sorry ! This  brand is not  available for service</h2>";
                    }
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>                            </div>
                        </div>

                    </div>";


                    }
}
}

// displaying brands in side navbar

function getbrands(){
    global $connection;
    $select_brands="select * from `brands`;";
    $result_brands=mysqli_query($connection,$select_brands);
    // $row_data=mysqli_fetch_assoc($result_brands);
    // echo $row_data['brand_title'];

    while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        // echo $brand_title;
        echo "<li class='nav-item'>
        <a href='index.php?brand=$brand_id'class ='nav-link text-light'>$brand_title</a>
        </li>";
    }
}

// to display catogories on the side nav

function getcategories(){
    global $connection;
    $select_categories="select * from `categories`;";
                                $result_categories=mysqli_query($connection,$select_categories);
                                // $row_data=mysqli_fetch_assoc($result_categories);
                                // echo $row_data['category_title'];

                                while($row_data=mysqli_fetch_assoc($result_categories)){
                                    $category_title=$row_data['category_title'];
                                    $category_id=$row_data['category_id'];
                                    // echo $category_title;
                                    echo "<li class='nav-item'>
                                    <a href='index.php?category=$category_id' class ='nav-link text-light'>$category_title</a>
                                    </li>";
                                }
}

// searching product function
function search_product(){
    global $connection;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];

    $search_query="Select * from `products` where product_keywords like '%$search_data_value%';";
                    $result_query=mysqli_query($connection,$search_query);
                    $num_of_rows=mysqli_num_rows($result_query);
                    if($num_of_rows==0){
                        echo "<h2 class='text-center text-danger'> No results match.No product found on this category</h2>";
                    }
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                            </div>
                        </div>

                    </div>";


                    }
                }
}

// view details function
function view_details(){
    global $connection;

    // condition to check isset or not
if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

        
                    $product__id=$_GET['product_id'];
                    $select_query="Select * from `products` where product_id= $product__id";
                    $result_query=mysqli_query($connection,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_category=$row['category_id'];
                        $product_brand=$row['brand_id'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        $product_image1=$row['product_image1'];
                        $product_image2=$row['product_image2'];
                        $product_image3=$row['product_image3'];

                        echo "<div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price /-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='index.php' class='btn btn-secondary'>Go home</a>
                            </div>
                        </div>

                    </div>
                    <div class='col-md-8'>
                            <!-- related cards -->
                            <div class='row'>
                                <div class='col-md-12'>
                                    <h4 class='text-center text-info mb-5  '>Related products</h4>
                                </div>
                                <div class='col-md-6'>
                                <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='...'>
                                </div>
                                <div class='col-md-6 '>
                                    <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='...'>
                                </div>

                            </div>

                        </div>";


                    }
}
}
}
}

// get ip address function
function get_ipaddress(){ 
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart(){
    if(isset($_GET['add_to_cart'])){
        global $connection;
        $get_ip_add = get_ipaddress();  
        $get_product_id=$_GET['add_to_cart'];  
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id;";
        $result_query=mysqli_query($connection,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0);";
            $result_query=mysqli_query($connection,$insert_query);
            echo "<script>alert(' item is added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";


        }

    }
}

// function to count cart items

function cart_items(){
    global $connection;

    if(isset($_GET['add_to_cart'])){
        $get_ip_add = get_ipaddress();  
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query=mysqli_query($connection,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);

    }else{
        $get_ip_add = get_ipaddress();  
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
        $result_query=mysqli_query($connection,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);

    }
    echo $count_cart_items;
}

// function to count total price
function total_cart_price(){
    global $connection;
    $total=0;
    $get_ip_add = get_ipaddress();  
    $cart_query="Select * from `cart_details` where ip_address='$get_ip_add';";
    $result_query=mysqli_query($connection,$cart_query);
    while($row=mysqli_fetch_array($result_query)){
        $product_id=$row['product_id'];
        $select_product="Select * from `products` where product_id= $product_id";
        $result_products=mysqli_query($connection,$select_product);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['product_price']); //[100,50,50,40]
            $product_value=array_sum($product_price); //[240]
             $total+=$product_value; //240

        }
    }
    echo $total;


}





?>