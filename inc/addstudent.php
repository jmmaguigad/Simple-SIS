<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if ($_POST) {
	
	$target_dir = "../assets/uploadedpics/";
	$target_file = $target_dir . basename($_FILES["stud_image"]["name"]);
	$filename = $_FILES["stud_image"]["name"];
	move_uploaded_file($_FILES["stud_image"]["tmp_name"], $target_file);

	if ($db->insertData('tblaccessinfo',
		'tblstudentinfo',
		
		"username,password",
		
		"student_id,stud_firstname,stud_middlename,stud_lastname,stud_extname,mobile_no,course,father_name,mother_name,country,province,city,address,sex,date_of_birth,email,stud_image",
		
		":username, :password",
		
		":student_id, :fname, :mname, :lname, :extname, :mobile_no, :course, :father_name, :mother_name, :country, :province, :city, :address, :sex, :date_of_birth, :email, :stud_image",
		
		array(':username' => $_POST['username']  , ':password' => md5($_POST['password'])),
		
		array(':student_id' => $_POST['studentid']  ,':fname' => $_POST['firstname']  , ':mname' => $_POST['middlename']  , ':lname' => $_POST['lastname']  , ':extname' => $_POST['extname'], ':accessid' => '', ':mobile_no' => $_POST['mobile_no'],  ':course' => $_POST['course'],  ':father_name' => $_POST['father_name'],  ':mother_name' => $_POST['mother_name'],  ':country' => $_POST['country'],  ':province' => $_POST['province'],  ':city' => $_POST['city'],  ':address' => $_POST['address'],  ':sex' => $_POST['sex'],  ':date_of_birth' => $_POST['date_of_birth'],  ':email' => $_POST['email'],  ':stud_image' => $filename ))) {
		$helper->redirect('../admin/home.php');
	}
}