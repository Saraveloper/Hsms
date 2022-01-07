<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Higher Study Abroad</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- Offcanvas CSS -->
    <link rel="stylesheet" type="text/css" href="css/off-canvas.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <!-- flaticon2 css  -->
    <link rel="stylesheet" type="text/css" href="fonts/fonts2/flaticon.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-main.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



    <!-- form req..... -->
    <script> 
        function validateForm() {
            var y = document.forms["form"]["name"].value;
            var letters = /^[A-Za-z]+$/;
            if (y == null || y == "") {
                alert("Name must be filled out.");
                return false;
            }
            var z = document.forms["form"]["college"].value;
            if (z == null || z == "") {
                alert("college must be filled out.");
                return false;
            }
            var x = document.forms["form"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address.");
                return false;
            }
            var a = document.forms["form"]["password"].value;
            if (a == null || a == "") {
                alert("Password must be filled out");
                return false;
            }
            if (a.length < 5 || a.length > 25) {
                alert("Passwords must be 5 to 25 characters long.");
                return false;
            }
            var b = document.forms["form"]["cpassword"].value;
            if (a != b) {
                alert("Passwords must match.");
                return false;
            }
        }
    </script>
    <!--end  form req..... -->

</head>


<body class="home1">
    <!--Preloader area start here-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!--Full width header Start-->
    <div class="full-width-header">

        <!-- Toolbar Start -->
        <div class="rs-toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-toolbar-left">
                            <div class="welcome-message">
                                <i class="fa fa-bank"></i><span>Welcome to Higher Study Abroad
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-toolbar-right">
                            <div class="toolbar-share-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <a href="admin/index.php" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">


            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="main-menu">
                        <div class="row relative">
                            <div class="col-sm-12">
                                <!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item menu-item-has-children"> <a href="index.php" class="home">Home</a>
                                         
                                        </li>
                                        <!-- End Home -->




                                            <!-- Rankings Menu Start -->
											<li class="rs-mega-menu mega-rs"> <a href="#">Rankings</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="about.html">Rankings Overview</a></li>
                                                                    <li><a href="about2.html">QS World University Rankings</a></li>
                                                                    <li><a href="blog.html">QS World University Rankings by Subject</a></li>
													                <li><a href="blog-details.html">QS Business Masters Rankings</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="teachers.html">QS Global MBA Rankings</a> </li>
                                                                    <li> <a href="teachers-without-filter.html">QS Graduate Employability Rankings</a> </li> 
                                                                    <li> <a href="teachers-single.html">QS USA University Rankings</a> </li>
                                                                    <li> <a href="contact.html">QS University Rankings by Region</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="gallery.html">QS University Rankings by Location</a> </li>
                                                                    <li> <a href="gallery2.html">QS Best Student Cities</a> </li> 
                                                                    <li> <a href="gallery3.html">QS Top 50 Under 50</a> </li>
                                                                    <li><a href="error-404.html">QS Stars Rating System</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="shop.html">QS IGAUGE Rating System</a> </li> 
                                                                    <li> <a href="shop-details.html">Related Articles</a> </li>                                                   
                                                                 
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
											</li>
											<!--Rankings Menu End -->


                                            <!-- Discover Menu Start -->
                                            <li class="rs-mega-menu mega-rs"> <a href="#">Discover</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="about.html">COVID-19 Information</a></li>
                                                                    <li><a href="about2.html">Course Matching Tool</a></li>
                                                                    <li><a href="blog.html">University Search</a></li>
													                <li><a href="blog-details.html">Program Search</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="teachers.html">Subject Guides</a> </li>
                                                                    <li> <a href="teachers-without-filter.html">Study Destination Guides</a> </li> 
                                                                    <li> <a href="teachers-single.html">Scholarship Advice</a> </li>
                                                                    <li> <a href="contact.html">Webinars</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="gallery.html">Business Schools</a> </li>
                                                                </ul>
                                                            </div>
                                                          
                                                        </div>
                                                    </li>
                                                </ul>
											</li>
											<!--Discover Menu End -->


                                






                                                 <!-- Discover Menu Start -->
                                        <li class="rs-mega-menu mega-rs"> <a href="#">Events</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="about.html">QS Master's and MBA Events</a></li>
                                                                    <li><a href="about2.html">Events in Africa and Middle East</a></li>
                                                                    <li><a href="blog.html">Events in Asia</a></li>
													                <li><a href="blog-details.html">Events in Europe</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="teachers.html">Events in North America</a> </li>
                                                                    <li> <a href="teachers-without-filter.html">Events in South America</a> </li> 
                                                          
                                                                </ul>
                                                            </div>                                                     
                                                          
                                                        </div>
                                                    </li>
                                                </ul>
											</li>
											<!--Discover Menu End -->



                                                    <!-- PREPARE Menu Start -->
                                        <li class="rs-mega-menu mega-rs"> <a href="#">Prepare</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="about.html">COVID-19 Information</a></li>
                                                                    <li><a href="about2.html">Free Test Preparation (QS-LEAP)</a></li>
                                                                    <li><a href="blog.html">Student Finance</a></li>
													                <li><a href="blog-details.html">QS Student Guides</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a href="teachers.html">Business Schools</a> </li>
                                                                   
                                                                </ul>
                                                            </div>                                                     
                                                          
                                                        </div>
                                                    </li>
                                                </ul>
											</li>
											<!--PREPARE Menu End -->

                                               <!--Courses Menu Start-->
                                        <li class="menu-item-has-children"> <a href="#">Apply</a>
                                            <ul class="sub-menu">
                                            <li> <a href="admin/index.php">Register Now</a></li>
                                                <li><a href="courses.php">Admission Support </a></li>

                                                <li><a href="courses.php">All Courses </a></li>
                                                <li><a href="courses-details2.php">Courses Details</a></li>
                                               
                                            </ul>
                                        </li>
                                        <!--Courses Menu End-->


                                                <!--Courses Menu Start-->
                                                <li class="menu-item-has-children"> <a href="#">Careers</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.php">Careers Advice </a></li>   

                                               
                                            </ul>
                                        </li>
                                        <!--Courses Menu End-->


                                        <!--Courses Menu Start-->
                                        <li class="menu-item-has-children"> <a href="#">Community</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.php">Blog</a></li>                                               
                                                <li><a href="courses.php">University News</a></li> 
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>  
                                                <li class="menu-item-has-children"> <a href="gallery2.php">Gallery</a>                                            
                                               
                                            </ul>
                                        </li>
                                        <!--Courses Menu End-->

                                    

                                         <!--Courses Menu Start-->
                                         <li class="menu-item-has-children"> <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                            <li> <a href="admin_login.php">Admin Login</a></li>      
                                            <li class="menu-item-has-children"> <a href="about.php">About Us</a>
                                            <li> <a href="contact.php">Contact</a></li> 
                                         
                                        </li>                                                                                                                        
                                               
                                            </ul>
                                        </li>
                                        <!--Courses Menu End-->

                                    </ul>
                                </nav>
                                <div class="right-bar-icon rs-offcanvas-link text-right">
                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                    <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->

    </div>
    <!--Full width header End-->