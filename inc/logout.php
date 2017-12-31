<?php
include 'init.php';
$login = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
$type = $_SESSION['user_type'];
if ($type == 'student') {

	$redirect_location = '../?login=student';

} else if ($type == 'faculty') {

	$redirect_location = '../?login=faculty';

} else if ($type == 'staff') {

	$redirect_location = '../?login=staff';

} else {

	$redirect_location = '../admin/';
}

if ($login->logout()) {

	$helper->redirect($redirect_location);

}