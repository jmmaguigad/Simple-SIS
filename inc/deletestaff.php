<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if (isset($_GET['delete'])) {
	if ($db->deleteData("tblstaff","record_num_staff",$_GET['delete'])) {
		$helper->redirect('../admin/home.php');
	}	
}