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
        <th>Customer Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Status</th>
     
      </tr>
    </thead>
    <tbody>
        <?php 
        $sql="SELECT * FROM morder";
        $rs=$con->query($sql);
        while($row=$rs->fetch_assoc()){
         ?>
      <tr>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['pprice']; ?></td>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['cemail']; ?></td>
        <td><?php echo $row['cphone']; ?></td>
        <td><?php echo $row['caddress']; ?></td>
        <td>
            <form action="stchange.php" method="post" id="frm<?php echo $row['order_id']; ?>">
            <input type="hidden" name="oid" value="<?php echo $row['order_id']; ?>">
            <select name="status" onchange="stc('frm<?php echo $row['order_id']; ?>')">
 <option <?php if($row['status']=="pending"){ echo "selected"; } ?> value="pending">Pending</option>
<option <?php if($row['status']=="complete"){ echo "selected"; } ?> value="complete">Complete</option>
<option <?php if($row['status']=="cancel"){ echo "selected"; } ?> value="cancel">Cancel</option>
                </select>

            </form>
        </td>
      </tr>
      <?php } ?>

    </tbody>
  </table>
</div>

<script>
    function stc(fid){
        document.getElementById(fid).submit();
    }
    
</script>

</body>
</html>