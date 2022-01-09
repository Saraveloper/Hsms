<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Higher Study Abroad </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>

    <!-- Contact Section Start -->
    <div class="row">
        <div class="container">
            <div class="contact-comment-section">
          
                <div id="form-messages"></div>

                <fieldset>

                    <form role="form" method="post" action="admin.php?q=index.php">
                        <div class="row">
                        <h3 >Admin Login  </h3>
                        <div class="col-md-2 col-sm-12"> </div>


                            <div class="col-md-4 col-sm-12">
                                
                                <div class="form-group">
                                    <label>username</label>
                                    <input name="uname" id="#" class="form-control" placeholder="Admin User Name" type="text">
                                </div>
                            </div> 


                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>password </label>
                                    <input id="password" name="password" placeholder="Admin password" class="form-control input-md" type="password">
                                </div>
                            </div> <br>
                       
                        <div class="form-group mb-0">
                            <input class="btn btn-success" type="submit" value="Login">
                        </div>

                        <div class="col-md-2 col-sm-12"> </div>
                    </form>
                </fieldset>

            </div>
        </div>
    </div>
    <!-- Contact Section End -->



