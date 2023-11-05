<?php 
include("inc/db.php");

if(isset($_POST['save'])){
$pn=$con->real_escape_string($_POST['pname']);
$pp=$_POST['pprice'];
$pdecp=$con->real_escape_string($_POST['pdecp']);
$cat=$_POST['cat'];
$buf=$_FILES['pimg']['tmp_name'];
$fn=time().$_FILES['pimg']['name'];

move_uploaded_file($buf,"upload_img/".$fn);

$ins="INSERT INTO product SET product_name='$pn',product_price='$pp',product_img='$fn',product_decp='$pdecp',category='$cat'";

$con->query($ins);

header("location:List_Product.php");
}else{
    echo "Access Denied";
}

?>