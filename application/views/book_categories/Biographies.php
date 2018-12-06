
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
				 <p><span>Need help?</span>  call us <span class="number">+94772308519</span></p>
			</div>
			<div class="account_desc">
				<ul>
				
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href= "<?=base_url('index.php/customer/CustomerRegistrationController/logout');?>"><font color="green"; font-family:bolt>LOGOUT</font></a></li>

				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				
				
				<img src="<?php echo base_url('assets/images/logo.png');?>" width= "300px"; overflow= "hidden">
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
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
			    	<li><a href= "<?=base_url('index.php/customer/CustomerRegistrationController/moveToAbout');?>">About</a></li>
			    	<li><a href="delivery.html">Delivery</a></li>
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


 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Biographies</h3>
    		</div>
    		<div class="see">
    			<p><a href="#"></a></p>
    		</div>
    		<div class="clear"></div>
		</div>
		
		<!--start of the showroom-->
	
<?php
	
	$this->load->database();
	$this->db->select('name');
	$this->db->select('image');
	$this->db->select('price');
	$this->db->from('book');
	$this->db->where('category',"2");
	$query1 = $this->db->get();
	$number_of_rows = $query1->num_rows();

	if($number_of_rows!=0){
	
		$result1 = $query1->result();
		foreach($result1 as $row){
				
?>
				
	<div class="grid_1_of_4 images_1_of_4">
		<a><img class="main-log" src="<?php echo base_url(); ?>/assets/images/uploaded/<?php echo substr("$row->image",55);?>"  style="width:220px; height:300px;"/></a>
		
		<div class="price-details">
			<div class="price-number">
				<p><span class="rupees"><strong><?php echo "$row->price";?></strong></span></p>
			</div>
			<div class="add-cart">								
				<h4><a href="<?=base_url('index.php/customer/CustomerRegistrationController/moveToPreview');?>">Add to Cart</a></h4>
			</div>
			<div class="clear"></div>
		</div>
	</div>
		
		

<?php
		}
	}

?>		



		<!--end of the showing-->
 </div>
</div>


   
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>



