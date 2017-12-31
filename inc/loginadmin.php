<?php
include_once 'connection.php';
include_once 'helper.php';

if ($_POST){
	$login = new ConCrud();
	$helper = new Helper();
	if ($login->login('admin',$_POST['username'],md5($_POST['password'])) == true) {

		$helper->redirect('../admin/home.php');

	} else {

      echo '<div class="well">Invalid Credentials, please check your inputs.<br><a href="../admin/">Go Back to Previous Page</a></div>';

	}
}