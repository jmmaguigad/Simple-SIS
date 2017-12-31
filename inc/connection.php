<?php
session_start();

Class ConCRUD {

private  $server = "mysql:host=localhost;dbname=dbsis";

private  $user = "root";

private  $pass = "";

private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

protected $con;
 
public function openConnection() {

  try

    {

      $this->con = new PDO($this->server, $this->user, $this->pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,));

      return $this->con;

    }

  catch (PDOException $e)
    
    {    
      echo "There is some problem in connection: " . $e->getMessage();    
    }
}

public function insertData($table1,$table2,$field1,$fields2,$values1,$values2,$params1,$params2) {
  try 

    {

      $db = $this->openConnection();
      $stm = $db->prepare("INSERT INTO $table1 ($field1) VALUES ($values1)");
      $stm->execute($params1);
      $stmt = $db->query("SELECT LAST_INSERT_ID()");
      $lastId = $stmt->fetchColumn();
      $params2['accessid'] = $lastId;
      array_filter($params2);      
      $stm = $db->prepare("INSERT INTO $table2 ($fields2,".'access_id'.") VALUES ($values2,".':accessid'.")");
      $stm->execute($params2);
      return true;
      
    } 

  catch (PDOException $e) 

    {
      echo "There is some problem while Inserting: ". $e->getMessage();
    }
}

public function deleteData($table,$field,$id) {
  try 

    {
      $db = $this->openConnection();
      if ($db->exec("DELETE FROM $table WHERE $field = ".$id."")) {

        return true;

      }    
    } 

  catch (Exception $e) 

    {
      echo "There is some problem while Deleting: ". $e->getMessage();
    }
}

public function editData($table,$fields,$where) {
  try 

    {
      $db = $this->openConnection();
      $db->exec("UPDATE $table SET $fields WHERE $where");    
    } 

  catch (Exception $e) 

    {
      echo "There is some problem while Updating: ". $e->getMessage();
    }
}

public function selectData($table1,$table2,$linkage,$where,$isjoin,$jointype) {
  try 

    {
      $db = $this->openConnection();
      if ($isjoin == 1) {
        
        if ($jointype == 'Inner') {
        
          $joinSql = "SELECT * FROM $table1 INNER JOIN $table2 ON $linkage";
          if ($where !== "") {
            $joinSql = $joinSql . " WHERE ". $where;
          }
          // echo $joinSql;
        }

          return $db->query($joinSql);                

      } else {
  
        return $db->query("SELECT * FROM $table1 $where");        
  
      }
    } 

  catch (Exception $e) 

    {
      echo "There is some problem while Selecting: ". $e->getMessage();
    }
}

public function login($type,$username,$password,$studentid=''){
  try 

    {
      $db = $this->openConnection();
      if ($type == 'admin') {
        
        $stmt = $db->prepare("SELECT * FROM tbladmin WHERE username=:uname OR password=:upass LIMIT 1"); 

      } else if ($type == 'student') {

        $stmt = $db->prepare("SELECT * FROM tblstudentinfo INNER JOIN tblaccessinfo ON tblstudentinfo.access_id = tblaccessinfo.record_num WHERE (tblaccessinfo.username=:uname OR tblstudentinfo.student_id=:studentid) AND tblaccessinfo.password=:upass LIMIT 1"); 
        
      } else if ($type == 'staff') {

        $stmt = $db->prepare("SELECT * FROM tblstaff INNER JOIN tblaccessinfo ON tblstaff.access_id = tblaccessinfo.record_num WHERE tblaccessinfo.username=:uname AND tblaccessinfo.password=:upass LIMIT 1"); 
        
      } else if ($type == 'faculty') {

        $stmt = $db->prepare("SELECT * FROM tblfaculty INNER JOIN tblaccessinfo ON tblfaculty.access_id = tblaccessinfo.record_num WHERE tblaccessinfo.username=:uname AND tblaccessinfo.password=:upass LIMIT 1"); 

      }

      if ($type == 'staff' || $type == 'faculty' || $type == 'admin') {
        $stmt->execute(array(':uname'=>$username, ':upass'=>$password));        
      } else {
        $stmt->execute(array(':uname'=>$username, ':upass'=>$password, ':studentid'=>$studentid));        
      }

      $accessRow = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($stmt->rowCount() > 0){
        if ($accessRow['password'] == $password) {
          $_SESSION['user_type'] = $type;
          $_SESSION['user_session'] = $accessRow['record_num'];
          $_SESSION['user_name'] = $accessRow['username'];
          return true;
        }
      } else {
        return false;
      } 
    } 

  catch (Exception $e) 

    {
      echo "There is some problem while Logging In: ". $e->getMessage();
    }
}

public function logout() {
  session_destroy();
  unset($_SESSION);
  return true;
}

public function closeConnection() {

   	$this->con = null;

	}

}

?>