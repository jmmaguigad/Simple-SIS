<?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'login') {
      echo '<div class="well">Invalid Credentials, please check your inputs.</div>';
    }
  }
?>
<form method="post" action="inc/login.php" class="form-horizontal">
  <fieldset>
    <?php
      if ($_GET['login'] == 'student') {
        $val = 'Student';
        $placeholder = 'Username or ID No';
      } else if ($_GET['login'] == 'staff') {
        $val = 'Staff';
        $placeholder = 'Username';
      } else if ($_GET['login'] == 'faculty') {
        $val = 'Faculty';
        $placeholder = 'Username';
      }
    ?>
    <legend>Login <?php echo $val; ?></legend>
    <input type="hidden" name="logintype" value="<?php echo $val; ?>">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username/ID No</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" id="inputusername" placeholder="<?php echo $placeholder; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
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