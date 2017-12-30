<?php
include '../inc/init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
$id = $_GET['editstudent'];
foreach ($database->selectData('tblstudentinfo','tblaccessinfo','tblstudentinfo.access_id = tblaccessinfo.record_num',"tblstudentinfo.record_num_stud = $id",1,'Inner') as $rowStud) {
?>
<form method="post" action="../inc/editstudent.php" enctype="multipart/form-data" class="form-horizontal">
  <fieldset>
    <legend>Edit Personal Info</legend>
    <input type="hidden" name="access_id" value="<?php echo $rowStud['access_id']; ?>">
    <input type="hidden" name="record_num_stud" value="<?php echo $id; ?>">    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Student ID</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['student_id']; ?>" class="form-control" id="inputStudentID" name="studentid">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Upload Picture</label>
      <div class="col-lg-10">
        <input type="file" class="form-control" name="stud_image">
      </div>
    </div>    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['stud_firstname']; ?>" class="form-control" id="inputFirstName" name="firstname" placeholder="Juan">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Middle Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['stud_middlename']; ?>" class="form-control" id="inputMiddleName" name="middlename" placeholder="Lopez">
      </div>
    </div>
        <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['stud_lastname']; ?>" class="form-control" name="lastname" id="inputLastName" placeholder="Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Ext. Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['stud_extname']; ?>" class="form-control" name="extname" id="inputEmail" placeholder="Jr. , Sr.">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Mobile No</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['mobile_no']; ?>" class="form-control" name="mobile_no" id="inputPhone">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" value="<?php echo $rowStud['email']; ?>" class="form-control" name="email">
      </div>
    </div>    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Course</label>
      <div class="col-lg-10">
        <select class="form-control" value="<?php echo $rowStud['course']; ?>" name="course">
          <option></option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Father Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowStud['father_name']; ?>" class="form-control" name="father_name" placeholder="Juan Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Mother Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?php echo $rowStud['mother_name']; ?>" name="mother_name" placeholder="Juana Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-10">
        <input type="text" name="country" value="<?php echo $rowStud['country']; ?>" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Province</label>
      <div class="col-lg-10">
        <input type="text" name="province" value="<?php echo $rowStud['province']; ?>" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">City</label>
      <div class="col-lg-10">
        <input type="text" name="city" value="<?php echo $rowStud['city']; ?>" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="address"><?php echo $rowStud['address']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Sex</label>
      <div class="col-lg-10">
        <select class="form-control" value="<?php echo $rowStud['sex']; ?>" name="sex">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Date of Birth</label>
      <div class="col-lg-10">
        <input type="date" class="form-control" value="<?php echo $rowStud['date_of_birth']; ?>" name="date_of_birth">
      </div>
    </div>
    <legend>Edit Access Info</legend>    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" value="<?php echo $rowStud['username']; ?>" name="username" placeholder="Username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Clear</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<?php } ?>