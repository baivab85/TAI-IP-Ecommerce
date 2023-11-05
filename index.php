<?php include("inc/db.php"); ?>
<?php include("inc/header.php"); ?>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					
<?php  include("inc/sidebar.php"); ?>

				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Products</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>food</h6>
					<?php 
        $sql="SELECT * FROM product";
        $rs=$con->query($sql);
        while($row=$rs->fetch_assoc()){
         ?>

	<div class="col-md-3 w3ls_w3l_banner_left" style="margin-bottom:30px;">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="Admin/upload_img/<?php echo $row['product_img']; ?>" alt=" " class="img-responsive" /></a>
											<p><?php echo $row['product_name']; ?></p>
											<h4><?php echo $row['product_price']; ?></h4>
										</div>
										<div class="snipcart-details">
											<div class="row">
												<div class="col-md-6">
										<input data-toggle="modal" data-target="#det<?php echo $row['product_id']; ?>" type="button" name="details" value="Details" class="btn btn-primary" />
										</div>
										<div class="col-md-6">
	<input data-toggle="modal" data-target="#bn<?php echo $row['product_id']; ?>" type="button" name="Order" value="Buy Now" class="btn btn-success" />
		                                     </div>
											 </div>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>


					<div class="modal" id="det<?php echo $row['product_id']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $row['product_name']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <?php echo $row['product_decp']; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<div class="modal" id="bn<?php echo $row['product_id']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $row['product_name']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
	  <form action="order.php" method="post">
	  <input type="hidden" name="pprice" value="<?php echo $row['product_price']; ?>">
		<input type="hidden" name="pid" value="<?php echo $row['product_id']; ?>">
		<input type="hidden" name="pname" value="<?php echo $row['product_name']; ?>">

		<p style="margin:10px;">Name</p>
		<p style="margin:10px;"><input type="text" name="name" class="form-control"></p>
		<p style="margin:10px;">Email</p>
		<p style="margin:10px;"><input type="text" name="email" class="form-control"></p>
		<p style="margin:10px;">Phone</p>
		<p style="margin:10px;"><input type="text" name="phone" class="form-control"></p>
		<p style="margin:10px;">Address</p>
		<p style="margin:10px;"><textarea name="address" class="form-control"></textarea></p>

		<p style="margin:10px;"><input type="submit" name="buynow" value="Buy Now" class="btn btn-success"></p>
	  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

					<?php } ?>	
			
		
					<div class="clearfix"> </div>
				</div>
			
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter -->
	
<!-- //newsletter -->
<!-- footer -->
	<?php include("inc/footer.php");  ?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>