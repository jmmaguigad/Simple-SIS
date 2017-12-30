<?php 
// echo $_SESSION['user_session']; 
?>
<?php include '../inc/init.php'; ?>
<?php include 'templates/header.php'; ?>
<?php 
	if (isset($_GET['add']) && $_GET['add'] != "") {
		if ($_GET['add'] == 'student') {
			include 'templates/addstudent.php';			
		} else if ($_GET['add'] == 'staff') {
			include 'templates/addstaff.php';			
		} else if ($_GET['add'] == 'faculty') {
			include 'templates/addfaculty.php';			
		}
	} else if (isset($_GET['about'])) {
		include 'templates/about.php';
	} else if (isset($_GET['editstudent'])) {
		include 'templates/editstudent.php';
	} else if (isset($_GET['editfaculty'])) {
		include 'templates/editfaculty.php';
	} else if (isset($_GET['editstaff'])) {
		include 'templates/editstaff.php';
	} else {
		include 'templates/userlist.php';
	}
?>
<?php include 'templates/footer.php'; ?>