<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/superhero/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php">SIS</a>
		</div>
		<div id="navbar">
			<?php 
				if (isset($_SESSION['user_name']) && isset($_SESSION['user_type'])) { 
					$usertype = $_SESSION['user_type'];
					if ($usertype == 'admin') {
			?>
						<ul class="nav navbar-nav">
							<li><a href="?add=student">Add Student</a></li>
							<li><a href="?add=staff">Add Staff</a></li>
							<li><a href="?add=faculty">Add Faculty</a></li>
							<li><a href="?editadmin">My Profile</a></li>							
						</ul>
					<?php } elseif ($usertype == 'staff') { ?>
						<ul class="nav navbar-nav">
							<li><a href="?add=student">Add Student</a></li>
							<li><a href="?add=faculty">Add Faculty</a></li>
							<li><a href="?editstaff">My Profile</a></li>							
						</ul>
					<?php } elseif ($usertype == 'faculty') { ?>
						<ul class="nav navbar-nav">
							<li><a href="?editfaculty">My Profile</a></li>
						</ul>					
					<?php } elseif ($usertype == 'student') { ?>
						<ul class="nav navbar-nav">
							<li><a href="?editstudent">My Profile</a></li>
						</ul>
					<?php } ?>
			<?php } ?>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="?about">About</a></li>
			<?php if (isset($_SESSION['user_name'])){ ?>
			<li><a href="../inc/logout.php">Logout <?php echo $_SESSION['user_name']; ?></a></li>
			<?php } else { ?>
			<li><a href="../?login=student">Back to Front</a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">