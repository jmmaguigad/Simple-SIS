<form method="post" action="inc/login.php" class="form-horizontal">
  <fieldset>
    <?php
      if ($_GET['login'] == 'student') {
        $val = 'Student';
      } else if ($_GET['login'] == 'staff') {
        $val = 'Staff';
      } else if ($_GET['login'] == 'faculty') {
        $val = 'Faculty';
      }
    ?>
    <legend>Login <?php echo $val; ?></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username/ID No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>