<?php include("inc/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <p><a href="Add_Product.php">Add New</a></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Product Image</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $sql="SELECT * FROM product";
        $rs=$con->query($sql);
        while($row=$rs->fetch_assoc()){
         ?>
      <tr>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['product_price']; ?></td>
        <td><?php echo $row['product_decp']; ?></td>
        <td><img style="width:100px;" src="upload_img/<?php echo $row['product_img']; ?>"></td>
        <td><a onclick="return confirm('Are you sure?');" href="del.php?pid=<?php echo $row['product_id']; ?>" class="btn btn-danger" >Delete</a></td>
        
      </tr>
      <?php } ?>

    </tbody>
  </table>
</div>

</body>
</html>