<?php
include '../inc/init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
$user_id = $_SESSION['user_session'];
$data = $db->selectData('tblstudentinfo','tblaccessinfo','tblstudentinfo.access_id = tblaccessinfo.record_num',"tblaccessinfo.record_num = $user_id",1,'Inner');
foreach ($data as $row) {
?>
<div class="row">
	<div class="col-md-12">
		<div class="image-holder">
			<img src="../assets/uploadedpics/<?php echo $row['stud_image']; ?>" />
		</div>
		<div class="info-holder">
			<ul>
				<li><strong>Name:</strong> <?php echo $row['stud_firstname'].' '.$row['stud_middlename'].' '.$row['stud_lastname'].' '.$row['stud_extname'] ?></li>
				<li><strong>Sex:</strong> <?php echo $row['sex']; ?></li>
				<li><strong>Mobile No:</strong> <?php echo $row['mobile_no']; ?></li>
				<li><strong>Email No:</strong> <?php echo $row['email']; ?></li>
				<li><strong>Course:</strong> <?php echo $row['course']; ?></li>
			</ul>
		</div>
	</div>
</div>
<?php } ?>