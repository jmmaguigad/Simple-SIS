<?php
include 'init.php';
$login = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
if ($login->logout()) {
	$helper->redirect('../admin/index.php');
}