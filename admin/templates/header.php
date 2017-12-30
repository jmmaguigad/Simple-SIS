<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/superhero/bootstrap.min.css">	
	<!-- ckeditor -->
	<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php">SIS</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="?add=student">Add Student</a></li>
				<li><a href="?add=staff">Add Staff</a></li>
				<li><a href="?add=faculty">Add Faculty</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="?about">About</a></li>
			<?php if (isset($_SESSION['user_name'])){ ?>
			<li><a href="../inc/logout.php">Logout <?php echo $_SESSION['user_name']; ?></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">