<form method="post" action="../inc/addstudent.php" enctype="multipart/form-data" class="form-horizontal">
  <fieldset>
    <legend>Personal Info</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Student ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputStudentID" name="studentid">
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
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Mobile No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="mobile_no" id="inputPhone">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email">
      </div>
    </div>    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Course</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="course">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Father Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="father_name" placeholder="Juan Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Mother Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="mother_name" placeholder="Juana Dela Cruz">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-10">
        <input type="text" name="country" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Province</label>
      <div class="col-lg-10">
        <input type="text" name="province" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">City</label>
      <div class="col-lg-10">
        <input type="text" name="city" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="address"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Sex</label>
      <div class="col-lg-10">
        <select class="form-control" name="sex">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Date of Birth</label>
      <div class="col-lg-10">
        <input type="date" class="form-control" name="date_of_birth">
      </div>
    </div>
    <legend>Access Info</legend>    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" placeholder="Username">
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