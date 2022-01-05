<!-- Footer Start -->
<?php include("./include/header.php"); ?>
<!-- Footer End -->


    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contact</h1>
                        <ul>
                            <li>
                                <a class="active" href="index-2.html">Home</a>
                            </li>
                            <li>Apply Now </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .breadcrumbs-inner end -->
    </div>
    <!-- Breadcrumbs End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="contact-comment-section">
                <h3>Register Now</h3>
                <div id="form-messages"></div>
                <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                <fieldset>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <!-- <label>Your Name</label> -->
                                <input name="name" id="#" class="form-control" placeholder="Your Full Name" type="text">
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="gender"></label>
                                <div class="col-md-12">
                                    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                                        <option value="Male">Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option> </select>
                                </div>
                            </div>
                        </div>
                    </div>

            <br>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <!-- <label for="name">College Name  </label> -->
                                <div class="col-md-12">
                                    <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <!-- <label>Your Email *  </label> -->
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                            </div>
                        </div>
                    </div>

                <br>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <!-- <label>Your Email *  </label> -->
                                <input id="address" name="address" placeholder="your address" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                                <!-- <label>Your Email *  </label> -->
                                <input id="mob" name="mob" placeholder="your Phone Number" class="form-control input-md" type="number">
                            </div>
                        </div>
                    </div>



                    <br>

                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <!-- <div class="form-group"> -->
                                <!-- <label>Your Email *  </label> -->
                                <!-- <input id="mob" name="mob" placeholder="your Phone Number" class="form-control input-md" type="number">
                            </div> -->
                        </div>

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                                <!-- <label>Your password </label> -->
                                <input id="password" name="password" placeholder="your password" class="form-control input-md" type="password">
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <!-- <label>Conform password </label> -->
                                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12" style="">
                      

                        <div class='form-group'>
        		<label>Your Image</label>
        		<!-- <input type='file' name='image' class='form-control'> -->
        		<!-- <img src = 'upload_images/$image' style='width:50px; height:50px'> -->

                <td><input type="file" name="image"></td>
        	</div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Submit Now">
                    </div>  
                </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->




<!-- Footer Start -->
<?php include("./include/footer.php"); ?>
<!-- Footer End -->