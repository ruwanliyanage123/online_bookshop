<!DOCTYPE HTML>
<head>
<title>online book</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/assets/css/slider.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/move-top.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/easing.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/startstop-slider.js"></script>


</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				<!-- <p><span>Need help?</span> call us <span class="number">+94772308519 (RUWAN)</span></span></p> -->
				 <p><span>Need help?</span> call us <span class="number">+94772308519</span></p>
			</div>

			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				
				
				<img src="<?php echo base_url('assets/images/logo.png');?>" width= "300px"; overflow= "hidden">
			</div>
		

			<!--start-->
			
			<!--end-->

			  <script type="text/javascript">

			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
				 	<li><a href= "<?=base_url('index.php/customer/CustomerRegistrationController/decieDashboard');?>">Home</a></li>
					<li><a href= "<?=base_url('index.php/commonDashboard/aboutView');?>">About</a></li>
			    	<li><a href="news.html">News</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonInformationTechnology');?>">Information Technology</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonBusiness');?>">Business</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonBiographies');?>">Biographies</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonArtsAndMusic');?>">Arts and Music</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonKids');?>">Kids</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonNovels');?>">Novels</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonSchoolEducational');?>">School Educational</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonHigherEducational');?>">Higher Educational </a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonMedical');?>">Medical</a></li>
				      <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonEnglish');?>">English</a></li>
					  <li><a href="<?=base_url('index.php/commonDashboard/categoryCommonTamil');?>">Tamil</a></li>
					 
				  </ul>
				</div>					
	  	     </div>
				
		      </div>
		   <div class="clear"></div>
		</div>
   </div>

 <div class="col-lg-6 col-md-6">
 	<div class="table-responsive">
 		<?php 
 			foreach($book as $row){
 				echo '
 				<div class="col-md-4" style="padding:16px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
 					<img src="'.base_url().'images/'.$row->image.'"class="img-thumbnail" /><br />
 					<h4>'.$row->name.'</h4>
 					<h3 class="text-danger">'.$row->price.'</h3>
 					<input type="text" name="quantity" class="quantity" id="'.$row->ISBN.'"/>
 					<button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->name.'" data-price="'.$row->price.'" data-productid="'.$row->ISBN.'" />Add to Cart</button>
 					</div>';

 			}
 		?>
 
</div>

	<div class="col-lg-6 col-md-6">
		<div id="cart_details">
			<h3 align="center">Cart is Empty</h3>
		</div>
	</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">

				
				
				<div class="col_1_of_4 span_1_of_4">
					
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			$(',add_cart').click(function()){
				var ISBN = $(this).data("ISBN");
				var name = $(this).data("name");
				var price = $(this).data("price");
				var quantity = $('#' + ISBN).val();

				if(quantity != '' && quantity > 0){
					$.ajax({
						url:"<?php echo base_url(); ?>Shopping_cart/add",
						method: "POST",
						data:{ISBN:ISBN, name:name, price:price,quantity:quantity},
						success:function(data){
							alert("Book Added into Cart");
							$('#cart_details').html(data);
							$('#' + ISBN).val('');
						}
					});
				}
				else{
					alert("Please Enter Quantity");
				}
			}
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>



