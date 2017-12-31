<?php
include_once 'connection.php';
include_once 'helper.php';

if ($_POST){
	$login = new ConCrud();
	$helper = new Helper();
	if ($login->login(strtolower($_POST['logintype']),$_POST['username'],md5($_POST['password']),$_POST['username']) == true) {

		$helper->redirect('../admin/home.php');

	} else {

      echo '<div class="well">Invalid Credentials, please check your inputs.<br><a href="../index.php">Go Back to Previous Page</a></div>';

	}
}