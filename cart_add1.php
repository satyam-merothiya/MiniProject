<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$insert_query="INSERT INTO user_items(user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart') ";
$insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:home.php');
?>