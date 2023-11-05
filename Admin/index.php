<?php
session_start();
include("inc/db.php");

if(isset($_POST['login'])){

    $e=$_POST['email'];

    $p=$_POST['pass'];


$sel="SELECT * FROM admin WHERE Admin_email='$e' AND Admin_pass='$p' ";

$rs=$con->query($sel);

if($rs->num_rows>0){

$row=$rs->fetch_assoc();
$_SESSION['aname']=$row['Admin_name'];
$_SESSION['aid']=$row['Admin_id'];

header("location:dashboard.php");

}else{
    $msg="Invalid Login";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->    
        <div class="row justipfy-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php if(isset($msg)){ ?>
                                    <div class="alert alert-danger alert-dismissible">
   <button type="button" class="close" data-dismiss="alert" >&times;</button>
   <strong>Error!</strong><?php echo $msg ?>                                   
</div>
<?php } ?>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="pass">
                                        </div>

                                        <p><input class="btn btn-primary btn-user btn-block"type="submit"name="login" value="login"/></p>
                                    

</body>

</html>