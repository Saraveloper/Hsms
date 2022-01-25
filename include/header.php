<?php
  require_once('admin/dbConnection.php');
//   $upload_dir = 'uploads/';

//   if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $sql = "select * from blog where id=".$id;
//     $result = mysqli_query($con, $sql);
//     if (mysqli_num_rows($result) > 0) {
//       $row = mysqli_fetch_assoc($result);
//     }else {
//       $errorMsg = 'Could not Find Any Record';
//     }
//   }
?>


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
  

    <!--Full width header Start-->
    <div class="full-width-header">    

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="main-menu">
                        <div class="row relative">
                            <div class="col-sm-12">
                            <!-- <div id="logo-sticky" >
										<a href="index.html"><img src="images/logo.png" hwight="50px" width="50px" alt="logo"></a>
									</div> -->
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">

                             
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                       <li> <a href="index.html"><img src="images/logo.png" hwight="50px" width="50px" alt="logo"></a>
                                        </li>
                                        <li class="current-menu-item current_page_item menu-item-has-children">
                                             <a href="index.php" class="home">Home</a>
                                         
                                        </li>
                                        <!-- End Home -->


                                            <!--Rankings Menu Start-->
                                            <li class="menu-item-has-children"> <a href="#">Rankings</a>
                                            <ul class="sub-menu">
                                            <li><a href="university_list.php"> World University Rankings</a></li>
                                            <li><a href="subject_list.php"> World University Rankings by Subject</a></li>
                                            </ul>
                                        </li>
                                        <!--Rankings Menu End--> 


                                                <!--Discover Menu Start-->
                                                <li class="menu-item-has-children"> <a href="#">Discover</a>
                                                <ul class="sub-menu">                                          
                                                <li><a href="destination_guide.php">Destination Guide</a></li>
                                                <li><a href="student_guide.php">Subject Guide</a></li>
                                                <li><a href="scholarship_advice.php">Scholarship Advice</a></li>
                                               
                                                                                       
                                            </ul>
                                            </li>
                                            <!--Discover Menu End--> 


                                            <!--Discover Menu Start-->
                                            <li class="menu-item-has-children"> <a href="#">PREPARE</a>
                                                <ul class="sub-menu">                                                
                                                <li><a href="ielts.php">IELTS </a></li>
                                                <li><a href="gre.php">GRE </a></li>
                                                <li><a href="sta.php">SAT </a></li>
                                                <li><a href="toefl.php">TOEFL </a></li>
                                                <li><a href="gmat.php">GMAT </a></li>
                                                <li> <a href="admin/index.php">Free Test</a></li>
                                                                        
                                            </ul>
                                            </li>
                                            <!--Discover Menu End--> 

                                                 <!--Discover Menu Start-->
                                                 <li class="menu-item-has-children"> <a href="#">ADMISSION</a>
                                                <ul class="sub-menu">
                                                <li> <a href="sop.php">SOP</a></li>
                                                <li><a href="lor.php">LOR</a></li>
                                                <li><a href="apply.php">Sending Application</a></li>
                                                  <li><a href="acceptance_letter.php">Acceptance Letter</a></li>
                                        
                                                                        
                                            </ul>
                                            </li>
                                            <!--Discover Menu End-->
                                   <!-- <li class="menu-item-has-children"> <a href="admin/admin_login.php">Admin Login</a> </li> -->
                                      
                                         <!--Courses Menu Start-->
                                         <li class="menu-item-has-children"> <a href="about.php">About</a> </li>                                                                                                                        
                                                                                                                                                    
                                               
                                            </ul>
                                        </li>
                                        <!--Courses Menu End-->

                                    </ul>
                                </nav>
                                <!-- <div class="right-bar-icon rs-offcanvas-link text-right">
                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                    <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                </div> -->
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
