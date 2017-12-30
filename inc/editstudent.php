<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if ($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['record_num_stud'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$extname = $_POST['extname'];
	$access_id = $_POST['access_id'];
	$mobile_no = $_POST['mobile_no'];
	$course = $_POST['course'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$country = $_POST['country'];
	$province = $_POST['province'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$sex = $_POST['sex'];
	$date_of_birth = $_POST['date_of_birth'];
	$email = $_POST['email'];
	if (isset($_POST['changepasswordconfirm'])) {
		if ($_POST['changepasswordconfirm'] == 'changepassword') {
			$password = ",`password` = '$password'";
		}
	}
	$db->editData("tblaccessinfo","`username` = '$username' $password","record_num=$access_id");
	$db->editData("tblstudentinfo","`student_id` = '$fname',`stud_firstname` = '$fname',`stud_middlename` = '$mname', `stud_lastname` = '$lname', `stud_extname` = '$extname', `mobile_no` = '$mobile_no', `course` = '$course', `father_name` = '$father_name', `mother_name` = '$mother_name', `country` = '$country', `province` = '$province', `city` = '$city', `address` = '$address', `sex` = '$sex', `date_of_birth` = '$date_of_birth', `email` = '$email'","record_num_stud=$id");
	$helper->redirect('../admin/home.php');
}

