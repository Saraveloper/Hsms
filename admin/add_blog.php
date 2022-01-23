<?php
  require_once('dbConnection.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $blog_title = $_POST['blog_title'];
    $blog_content = $_POST['blog_content'];

    $imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];

    if(empty($blog_title)){
			$errorMsg = 'Please input blog_title';
		}elseif(empty($blog_content)){
			$errorMsg = 'Please input blog_content';
		}
        {
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			// "/Store_Brand/store_admin/images/"

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into blog(blog_title, blog_content, image)
					values('".$blog_title."', '".$blog_content."', '".$userPic."')";
			$result = mysqli_query($con, $sql);
			if($result){
				$successMsg = 'Blog added successfully';
				header('Location: add_blog.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($con);
			}
		}
  }
?>