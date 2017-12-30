<?php
include 'init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if (isset($_GET['delete'])) {
	if ($db->deleteData("tblstudentinfo","record_num_stud",$_GET['delete'])) {
		$helper->redirect('../admin/home.php');
	}	
}
