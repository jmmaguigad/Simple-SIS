<?php
include '../inc/init.php';
$db = $GLOBALS['database'];
$helper = $GLOBALS['helper'];
$id = $_GET['editfaculty'];
if ($id == "" && isset($_SESSION['user_session'])) {
  $user_id = $_SESSION['user_session'];
  $data = $db->selectData('tblfaculty','tblaccessinfo','tblfaculty.access_id = tblaccessinfo.record_num',"tblaccessinfo.record_num = $user_id",1,'Inner');
} else {
  $data = $db->selectData('tblfaculty','tblaccessinfo','tblfaculty.access_id = tblaccessinfo.record_num',"tblfaculty.record_num_fac = $id",1,'Inner');
}
foreach ($data as $rowFac) {
?>
<form method="post" action="../inc/editfaculty.php" class="form-horizontal">
  <fieldset>
    <legend>Edit Personal Info</legend>
    <input type="hidden" name="access_id" value="<?php echo $rowFac['access_id']; ?>">
    <input type="hidden" name="record_num_fac" value="<?php echo $id; ?>">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input value="<?php echo $rowFac['fac_firstname']; ?>" type="text" class="form-control" id="inputFirstName" name="firstname" placeholder="Juan">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Middle Name</label>
      <div class="col-lg-10">
        <input value="<?php echo $rowFac['fac_middlename']; ?>" type="text" class="form-control" id="inputMiddleName" name="middlename" placeholder="Lopez">
      </div>
    </div>
        <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowFac['fac_lastname']; ?>" class="form-control" name="lastname" id="inputLastName" placeholder="Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Ext. Name</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowFac['fac_extname']; ?>" class="form-control" name="extname" id="inputEmail" placeholder="Jr. , Sr.">
      </div>
    </div>
    <legend>Edit Access Info</legend>    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" value="<?php echo $rowFac['username']; ?>" class="form-control" name="username" id="inputUsername" placeholder="Username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input value="changepassword" name="changepasswordconfirm" type="checkbox"> Check to Change Password
          </label>
        </div>        
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