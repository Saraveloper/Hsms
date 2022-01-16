<?php include("./include/header.php"); ?>


    <!-- Slider Area Start -->
    <div id="rs-slider" class="slider-overlay-2">
        <div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1"
            data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
            <!-- Item 1 -->
            <div class="item active">
                <img src="images/slider/home1/slide1.jpg" alt="Slide1" />
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <h3 class="" data-animation-in="fadeInLeft" data-animation-out="animate-out" >
                                     <span style="background-color:green; font-size:30px; color:white">  WELCOME TO Higher Study Abroad</span> </h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
            <img src="images/slider/home1/slide3.jpg" alt="Slide3" />
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1 class="slider-title" data-animation-in="fadeInUp"
                                 data-animation-out="animate-out">  <span style="background-color:green; font-size:30px; color:white">ARE YOU READY TO APPLY?  </span> </h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Services Start -->
    <div class="rs-services rs-services-style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Trending Courses</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-book rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Subject </h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-user rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">University</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Certification</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->






    <div id="rs-courses" class="rs-courses rs-courses-style6 sec-color sec-spacer">
			<div class="container">
			<div class="sec-title2 mb-50 text-center">
                <span class="primary-color">Latest Blog</span>      
                <h2>Top Searched</h2> 
            </div>


  <?php 
  
    $query = "SELECT * FROM blog";  
  
  ?>



<?php 
  
 

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from blog where id=".$id;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }
?>




				<div class="row">
                    <div class="col-lg-4 col-md-6">

                        <div class="cource-item">
                            <div class="cource-img">
                                   <img src="images/courses/1.jpg" alt="">
                                   <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                       <i class="fa fa-link"></i>
                                   </a>                        
                            
                            </div>
                            <div class="course-body">
                            <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                            <p>Last Blog and new site Last Blog and new site
                            Last Blog and new site Last Blog and new....
                            </p>

      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    

                                  
                               
                            </div>
                           
                        </div> 
                    </div> 
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item blue-color">
                            <div class="cource-img">
                                   <img src="images/courses/2.jpg" alt="">
                                   <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                       <i class="fa fa-link"></i>
                                   </a>
                            
                              
                            </div>
                            <div class="course-body">
                                  
                                    <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                            <p>Last Blog and new site Last Blog and new site
                            Last Blog and new site Last Blog and new....
                            </p>

      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    

                            </div>
                      
                        </div> 
                    </div> 
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item blue-color">
                            <div class="cource-img">
                                   <img src="images/courses/3.jpg" alt="">
                                 
                                       <i class="fa fa-link"></i>
                                   </a>
                             
                          
                            </div>
                            <div class="course-body">
                            
                                    <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                            <p>Last Blog and new site Last Blog and new site
                            Last Blog and new site Last Blog and new....
                            </p>

      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    

                            </div>
                      
                        </div> 
                    </div> 
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item blue-color">
                            <div class="cource-img">
                                   <img src="images/courses/4.jpg" alt="">
                                   <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                       <i class="fa fa-link"></i>
                                   </a>
                        
                             
                            </div>
                            <div class="course-body">
                                 
                                    <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                                    <p>Last Blog and new site Last Blog and new site
                                    Last Blog and new site Last Blog and new....
                                    </p>

      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    

                            </div>
                      
                        </div> 
                    </div> 
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item blue-color">
                            <div class="cource-img">
                                   <img src="images/courses/5.jpg" alt="">
                                   <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                       <i class="fa fa-link"></i>
                                   </a>
                          
                            </div>
                            <div class="course-body">
                                 
                                    <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                                    <p>Last Blog and new site Last Blog and new site
                                    Last Blog and new site Last Blog and new....
                                    </p>
      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    

                            </div>
                       
                        </div> 
                    </div> 
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item blue-color">
                            <div class="cource-img">
                                   <img src="images/courses/6.jpg" alt="">
                                   <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                       <i class="fa fa-link"></i>
                                   </a>
                              
                            </div>
                            <div class="course-body">
                                  
                                    <h4 class="title"><a href="courses-details.html">Music Course</a></h4>
                                    <p>Last Blog and new site Last Blog and new site
                                    Last Blog and new site Last Blog and new....
                                    </p>

                                
      <a href="#" class="news-btn"style="   display: inline-block;margin-left: auto; padding: 4px 16px;font-size: 13px;font-weight: 500;text-decoration: none; background-color: #ff3115;color: #fff;" >Read More</a>                                    
                                  

                            </div>
                   
                        </div> 
                    </div>
			    </div>

                <div class="col-lg-12 text-center">
                   <div class="btn-part mt-20">
                       <a class="readon2" href="#">View All Courses</a>
                   </div> 
                </div>
			</div>
        </div>




















   

    <!-- Counter Up Section Start-->
    <div class="rs-counter pt-100 pb-70 bg3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="counter-content">
                        <h2 class="counter-title">ACHEIVEMENTS</h2>
                        <div class="counter-text">
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart like mine.</p>
                        </div>
                        <div class="counter-img rs-image-effect-shine">
                            <img src="images/counter/1.jpg" alt="Counter Discussion">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-80">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rs-counter-list">
                                <h2 class="counter-number plus">50</h2>
                                <h4 class="counter-desc">Top University</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-counter-list">
                                <h2 class="counter-number plus">15</h2>
                                <h4 class="counter-desc">Top Subject</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rs-counter-list">
                                <h2 class="counter-number plus">12</h2>
                                <h4 class="counter-desc">Top Country</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-counter-list">
                                <h2 class="counter-number plus">20</h2>
                                <h4 class="counter-desc">Top City</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Down Section End -->





    <!-- Calltoaction Start -->
    <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
        <div class="container">
            <div class="rs-cta-inner text-center">
                <div class="sec-title mb-50 text-center">
                    <h2 class="white-color">Test &amp; Your Skill</h2>
                    <p class="white-color"> Free Test Skill</p>
                </div>
                <a class="cta-button" href="#"> Register Now </a>
            </div>
        </div>
    </div>
    <!-- Calltoaction End -->




    <!-- Latest News Start -->
    <div id="rs-latest-news" class="rs-latest-news sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>OUR LASTEST NEWS</h2>
                <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
            </div>
            <div class="row">

                <div class="col-md-6">            

  
                    <div class="news-normal-block">                    
                        <div class="news-img">
                            <a href="#">
                                <img src="images/blog/1.jpg" alt="" />                             
                            </a>
                        </div>

                        <div class="news-date">
                            <i class="fa fa-calendar-check-o"></i>
                            <span>June  28,  2017</span>
                        </div>

                        <h4 class="news-title"><a href="blog-details.html"> 
                        <span>gfdgd</span></a></h4>
                        
                      
                        <div class="news-desc">
                            <p>
                       
                            <span>gfg</span>
                            </p>
                        </div>


                        <div class="news-btn">
                            <a href="#">Read More</a>
                        </div>

                    </div>
                </div>




                <div class="col-md-6">
                    <div class="news-list-block">
                        <div class="news-list-item">
                            <div class="news-img">
                                <a href="#">
                                    <img src="images/blog/2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">While the lovely valley team work</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
                                </div>
                                <div class="news-desc">
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-list-item">
                            <div class="news-img">
                                <a href="#">
                                    <img src="images/blog/3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">I must explain to you how all this idea</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
                                </div>
                                <div class="news-desc">
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-list-item">
                            <div class="news-img">
                                <a href="#">
                                    <img src="images/blog/4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing a stroke</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
                                </div>
                                <div class="news-desc">
                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News End -->

  




   


<!-- Footer Start -->
    <?php include("./include/footer.php"); ?>
<!-- Footer End -->
