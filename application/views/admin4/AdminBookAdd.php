<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Siyapatha Publications</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/logo/dashboard_logo.jpg">
    
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
        
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
        

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminDashboard');?>"><img class="main-log" src="<?php echo base_url(); ?>/assets/img/logo/dashboard_logo.jpg" height="120px"; width="170px"; alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
                        
                        <li>
              
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Sellers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminSellerAll');?>"><span class="mini-sub-pro">All Sellers</span></a></li>
                                <li><a title="Add Professor" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminSellerAdd');?>"><span class="mini-sub-pro">Add Seller</span></a></li>
                                <li><a title="Edit Professor" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminSellerEdit');?>"><span class="mini-sub-pro">Edit Seller</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Customers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminCustomerAll');?>"><span class="mini-sub-pro">All Customers</span></a></li>
                                <li><a title="Add Students" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminCustomerAdd');?>"><span class="mini-sub-pro">Add Customer</span></a></li>
                                <li><a title="Edit Students" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminCustomerEdit');?>"><span class="mini-sub-pro">Edit Customer</span></a></li>
                                </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Books</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminBookAll');?>"><span class="mini-sub-pro">All Books</span></a></li>
                                <li><a title="All Library" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminBookAdd');?>"><span class="mini-sub-pro">Add Book</span></a></li>
                                <li><a title="Add Library" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminBookEdit');?>"><span class="mini-sub-pro">Edit Book</span></a></li>
                                <li><a title="Edit Library" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminBookRemove');?>"><span class="mini-sub-pro">Remove Book</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminMailInbox');?>"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminMailView');?>"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="<?=base_url('index.php/admin/AdminDashboard/moveToAdminMailCompose');?>"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        
                                    </div>


<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?php echo base_url(); ?>/assets/img/notification/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?php echo base_url(); ?>/assets/img/notification/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?php echo base_url(); ?>/assets/img/notification/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?php echo base_url(); ?>/assets/img/notification/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="<?php echo base_url(); ?>/assets/img/product/pro4.jpg" alt="" />
															<span class="admin-name">Prof.Anderson</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                      
        </div>
        <!-- Single pro tab review Start-->
        <!--start the application-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad">
                                                        <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="isbn" type="text" class="form-control" placeholder="ISBN">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="author" type="text" class="form-control" placeholder="Author">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="trtanslator" type="text" class="form-control" placeholder="Translator">
                                                                    </div>
                                                                    
                                                                    <div class="form-group alert-up-pd">
                                                                        <div class="dz-message needsclick download-custom">
                                                                            <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                            <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                            
                                                                            <input name="imageico" class="hd-pro-img" type="text" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="publisher" placeholder="Publisher">
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <input name="price" type="text" class="form-control" placeholder="Price">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="quantity" type="text" class="form-control" placeholder="Quantity">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select name="country" class="form-control">
                                                                            <option value="none" selected="" disabled="">Select Category</option>
                                                                            <option value="0">INFORMATION TECHNOLOGY</option>
                                                                            <option value="1">BUSINESS</option>
                                                                            <option value="2">BIOGRAPHIES</option>
                                                                            <option value="3">ARTS AND MUSIC</option>
                                                                            <option value="4">KIDS</option>
                                                                            <option value="5">NOVELS</option>
                                                                            <option value="6">SCHOOL EDUCATIONAL</option>
                                                                            <option value="7">HIGHER EDUCATIONAL</option>
                                                                            <option value="8">MEDICAL</option>
                                                                            <option value="9">ENGLISH</option>
                                                                            <option value="10">TAMIL</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group res-mg-t-15">
                                                                        <textarea name="description" placeholder="Description"></textarea>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!--end the application-->

    <!-- jquery
		============================================ -->
        <script src="<?php echo base_url(); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src=" <?php echo base_url(); ?>/assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src=" <?php echo base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS

    
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/morrisjs/home3-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/js/tawk-chat.js"></script>
</body>


</html>