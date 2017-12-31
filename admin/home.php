<?php 
// echo $_SESSION['user_session']; 
?>
<?php 
	include '../inc/init.php'; 
	$db = $GLOBALS['database'];
	$helper = $GLOBALS['helper'];

	$usertype = $_SESSION['user_type'];

	if (isset($_SESSION['user_session'])) { 

		include 'templates/header.php';

		if ($usertype == 'admin' || $usertype == 'staff') {

		
			if (isset($_GET['add']) && $_GET['add'] != "") {

				if ($_GET['add'] == 'student') {
					include 'templates/addstudent.php';			
				} else if ($_GET['add'] == 'staff') {
					include 'templates/addstaff.php';			
				} else if ($_GET['add'] == 'faculty') {
					include 'templates/addfaculty.php';			
				}

			} else if (isset($_GET['editstudent'])) {
				include 'templates/editstudent.php';
			} else if (isset($_GET['editfaculty'])) {
				include 'templates/editfaculty.php';
			} else if (isset($_GET['editstaff'])) {
				include 'templates/editstaff.php';
			} else if (!isset($_GET['about'])) {
				include 'templates/userlist.php';
			}

			} else if ($usertype == 'student') {
				if (isset($_GET['editstudent'])) {
					include 'templates/editstudent.php';
				} else {
					include 'templates/studentpic.php';
				}
			} else if ($usertype == 'faculty') {
				if (isset($_GET['editfaculty'])) {
					include 'templates/editfaculty.php';
				}
			}

			if (isset($_GET['about'])) {
				include 'templates/about.php';
			}

			include 'templates/footer.php';

	} else { 

		$helper->redirect('index.php');
} 
?>