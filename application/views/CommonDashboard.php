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
			<div class="account_desc">
				<ul>
					<li><a href= "<?=base_url('index.php/customer/CustomerRegistrationController/customerRegistrationView')?>" ><font color="green"; font-family:bolt>REGISTER</font></a></li>
					<li><a href= "<?=base_url('index.php/customer/CustomerRegistrationController/customerLoginView');?>"><font color="green"; font-family:bolt>LOGIN</font></a></li>
				</ul>
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
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									 	<img src="<?php echo base_url('assets/images/books/books_for_main_slide_3.jpg');?>" height="300px"; width="400px"; overflow= "hidden">
					
									     <!--<a href="preview.html"><img src="images/slide-1-image.png" alt="learn more" /></a>	-->								    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									   <div class="features_list">
									   					               
							            </div>
							             
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   						               
							            </div>
							            
					                   </div>		
						             	 <div class="slider-img">
										  <img src="<?php echo base_url('assets/images/books/books_for_main_slide_5.jpg');?>"  height="320px"; width="400px";  overflow= "hidden">
					
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									  <img src="<?php echo base_url('assets/images/books/books_for_main_slide_4.jpg');?>"overflow= "hidden">
					
									  </div>
									  <div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 10% OFF</h2>
									   <div class="features_list">
									   	  </div>
							            
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  		<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_novel_1.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_business_4.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_information_technology_4.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_biography_6.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>
			</div>


			<div class="content_bottom">
				<div class="heading">
					<h3>Feature Products</h3>
				</div>
				<div class="see">
					<p><a href="#">See all Products</a></p>
				</div>
    			<div class="clear"></div>
			</div>
			
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_biography_7.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_music_3.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_novel_7.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

				<div class="grid_1_of_4 images_1_of_4">
					<img src="<?php echo base_url('assets/images/books/books_Music_1.jpg');?>" width= "250px"; height="300px"; overflow= "hidden">
					
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">LKR. 1,170.00</span></p>
							</div>
							
						</div>
				</div>

			</div>
    </div>
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
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

