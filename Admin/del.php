<?php 
include("inc/db.php");
$proid=$_GET['pid'];



$sql="SELECT * FROM product WHERE product_id='$proid'";
$rs=$con->query($sql);
$row=$rs->fetch_assoc();

unlink("upload_img/".$row['product_img']);


$d="DELETE FROM product WHERE product_id='$proid'";
$con->query($d);


header("location:List_Product.php");
?>