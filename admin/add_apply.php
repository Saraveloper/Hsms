<?php
  require_once('dbConnection.php');


  if (isset($_POST['Submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $country_code = $_POST['country_code'];
    $mobile = $_POST['mobile'];
    $exam_yes_no = $_POST['exam_yes_no'];
    // $study_destination = $_POST['study_destination'];
    // $intake_date = $_POST['intake_date'];
    // $intended_study_level = $_POST['intended_study_level'];
    // $subject_interest = $_POST['subject_interest'];
    // $yearly_tuition_budget = $_POST['yearly_tuition_budget'];
    // $eng_language_abroad = $_POST['eng_language_abroad'];
    // $attended_s_u_name = $_POST['attended_s_u_name'];
    // $check_one = $_POST['check_one'];
    // $check_two = $_POST['check_two'];


    if(empty($fname)){
			$errorMsg = 'Please input fname';
		}elseif(empty($lname)){
			$errorMsg = 'Please input lname';
		}

		if(!isset($errorMsg)){
			$sql = "insert into apply(fname, lname, email, country, country_code, mobile, exam_yes_no)
            
			values('".$fname."', '".$lname."', '".$email."','".$country."','".$country_code."', '".$mobile."', '".$exam_yes_no."')";
            //     '".$study_destination."', '".$intake_date."', '".$study_destination."', '".$intended_study_level."', '".$subject_interest."', '".$yearly_tuition_budget."', '".$eng_language_abroad."', '".$attended_s_u_name."', '".$check_one."', '".$check_two."',

            //  , exam_yes_no, study_destination, intake_date,intended_study_level,subject_interest,
            // subject_interest,yearly_tuition_budget, eng_language_abroad,attended_s_u_name,check_one,check_two

			$result = mysqli_query($con, $sql);
			if($result){
				$successMsg = 'Apply successfully';
             
				// header('Location: ../apply.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($con);
			}
		}
  }
?>