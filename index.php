<?php include 'inc/init.php'; ?>
<?php include 'templates/header.php'; ?>
<?php
	if (isset($_GET['login']) && $_GET['login'] !== "") {
		if ($_GET['login'] == 'student' || $_GET['login'] == 'faculty' || $_GET['login'] == 'staff') {
			include 'templates/logintemplate.php';
		}
	}  else if (isset($_GET['about'])) {
		include 'admin/templates/about.php';
	}
?>
<?php include 'templates/footer.php'; ?>