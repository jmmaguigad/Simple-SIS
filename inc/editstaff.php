<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if ($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['record_num_fac'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$extname = $_POST['extname'];
	$access_id = $_POST['access_id'];
	if (isset($_POST['changepasswordconfirm'])) {
		if ($_POST['changepasswordconfirm'] == 'changepassword') {
			$password = ",`password` = '$password'";
		}
	}
	$db->editData("tblaccessinfo","`username` = '$username' $password","record_num=$access_id");
	$db->editData("tblstaff","`staff_firstname` = '$fname',`staff_middlename` = '$mname', `staff_lastname` = '$lname', `staff_extname` = '$extname'","record_num_staff=$id");
	$helper->redirect('../admin/home.php');
}

