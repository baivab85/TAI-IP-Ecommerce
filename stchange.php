<?php 
include("inc/db.php");

$status=$_POST['status'];
$oid=$_POST['oid'];

$ins="UPDATE morder SET status='$status' WHERE order_id='$oid'";

$con->query($ins);

header("location:manage_order.php");


?>