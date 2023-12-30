<?php
$connection=mysqli_connect('localhost','root','','mystore');
if(!$connection){
    die(mysqli_connect_error($connection));
}

?>