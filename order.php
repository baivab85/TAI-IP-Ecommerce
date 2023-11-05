<?php 
include("inc/db.php");

$name=$con->real_escape_string($_POST['name']);
$email=$con->real_escape_string($_POST['email']);
$phone=$con->real_escape_string($_POST['phone']);
$address=$con->real_escape_string($_POST['address']);


$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];

$ins="INSERT INTO morder SET pid='$pid',pname='$pname',pprice='$pprice',cname='$name',cphone='$phone',cemail='$email',caddress='$address'";

$con->query($ins);

?>


<script>
    alert("Order Done successfully! ");
    window.location='index.php';
</script>