<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if (isset($_GET['delete'])) {
	if ($db->deleteData("tblfaculty","record_num_fac",$_GET['delete'])) {
		$helper->redirect('../admin/home.php');
	}	
}
