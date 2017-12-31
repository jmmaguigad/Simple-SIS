<?php 
  $database = $GLOBALS['database']; 
  $user_type = $_SESSION['user_type'];
?>
<ul class="nav nav-tabs">
  <li class="active"><a href="#student" data-toggle="tab" aria-expanded="true">Students</a></li>
  <li class=""><a href="#faculty" data-toggle="tab" aria-expanded="false">Faculty</a></li>
  <?php if ($user_type == 'admin') { ?>
  <li class=""><a href="#staff" data-toggle="tab" aria-expanded="false">Staff</a></li>
  <?php } ?>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="student">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>#</th>
          <th>ID No</th>
          <th>Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $cnt = 1;
          foreach ($database->selectData('tblstudentinfo','tblaccessinfo','tblstudentinfo.access_id = tblaccessinfo.record_num','',1,'Inner') as $rowStud) {
        ?>
        <tr>
          <td><?php echo $cnt; ?></td>
          <td><?php echo $rowStud['student_id']; ?></td>
          <td><?php echo $rowStud['stud_firstname'].' '.$rowStud['stud_middlename'].' '.$rowStud['stud_lastname'].' '.$rowStud['stud_extname']; ?></td>
          <td><?php echo $rowStud['username']; ?></td>
          <td><?php echo $rowStud['password']; ?></td>
          <td><a href="../inc/deletestudent.php?delete=<?php echo $rowStud['record_num_stud']; ?>">Delete</a>&nbsp; | &nbsp;<a href="?editstudent=<?php echo $rowStud['record_num_stud']; ?>">Edit</a></td> 
        </tr>
        <?php 
            $cnt++;
          } 
        ?>
      </tbody>
    </table> 
  </div>
  <div class="tab-pane fade" id="faculty">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $cnt = 1;
          foreach ($database->selectData('tblfaculty','tblaccessinfo','tblfaculty.access_id = tblaccessinfo.record_num','',1,'Inner') as $rowFac) {
        ?>
        <tr>
          <td><?php echo $cnt; ?></td>
          <td><?php echo $rowFac['fac_firstname'].' '.$rowFac['fac_middlename'].' '.$rowFac['fac_lastname'].' '.$rowFac['fac_extname']; ?></td>
          <td><?php echo $rowFac['username']; ?></td>
          <td><?php echo $rowFac['password']; ?></td>
          <td><a href="../inc/deletefaculty.php?delete=<?php echo $rowFac['record_num_fac']; ?>">Delete</a>&nbsp; | &nbsp;<a href="?editfaculty=<?php echo $rowFac['record_num_fac']; ?>">Edit</a></td>          
        </tr>
        <?php 
            $cnt++;
          } 
        ?>      
      </tbody>
    </table> 
  </div>
  <?php if ($user_type == 'admin') { ?>
  <div class="tab-pane fade" id="staff">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $cnt = 1;
          foreach ($database->selectData('tblstaff','tblaccessinfo','tblstaff.access_id = tblaccessinfo.record_num','',1,'Inner') as $rowStaff) {
        ?>
        <tr>
          <td><?php echo $cnt; ?></td>
          <td><?php echo $rowStaff['staff_firstname'].' '.$rowStaff['staff_middlename'].' '.$rowStaff['staff_lastname'].' '.$rowStaff['staff_extname']; ?></td>
          <td><?php echo $rowStaff['username']; ?></td>
          <td><?php echo $rowStaff['password']; ?></td>
          <td><a href="../inc/deletestaff.php?delete=<?php echo $rowStaff['record_num_staff']; ?>"">Delete</a>&nbsp; | &nbsp;<a href="?editstaff=<?php echo $rowStaff['record_num_staff']; ?>">Edit</a></td>          
        </tr>
        <?php 
            $cnt++;
          } 
        ?>      
      </tbody>
    </table>   
  </div>
  <?php } ?>
</div>