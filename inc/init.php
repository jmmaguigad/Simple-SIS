<?php
	include_once 'connection.php';
	include_once 'helper.php';
	$GLOBALS['database'] = new ConCRUD();
	$GLOBALS['helper'] = new Helper();
?>