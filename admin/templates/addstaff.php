<form method="post" action="../inc/addstaff.php" class="form-horizontal">
  <fieldset>
    <legend>Personal Info</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputFirstName" name="firstname" placeholder="Juan">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Middle Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputMiddleName" name="middlename" placeholder="Lopez">
      </div>
    </div>
        <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="lastname" id="inputLastName" placeholder="Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Ext. Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="extname" id="inputEmail" placeholder="Jr. , Sr.">
      </div>
    </div>
    <legend>Access Info</legend>    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
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