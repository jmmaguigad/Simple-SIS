<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if ($_POST) {
	if ($db->insertData('tblaccessinfo','tblstaff',"username,password","staff_firstname,staff_middlename,staff_lastname,staff_extname",":username, :password",":fname, :mname, :lname, :extname",array(':username' => $_POST['username']  , ':password' => md5($_POST['password'])),array(':fname' => $_POST['firstname']  , ':mname' => $_POST['middlename']  , ':lname' => $_POST['lastname']  , ':extname' => $_POST['extname'], ':accessid' => ''))) {
		$helper->redirect('../admin/home.php');
	}	
}