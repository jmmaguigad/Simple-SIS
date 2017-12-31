HOW TO USE
* First include connection and instantiate

include_once 'inc/connection.php';
$database = new Connection();

* CRUD Operation

** To Insert
$database->insertData($table1,$table2,$field1,$fields2,$values1,$values2,$params1,$params2);

** To Delete
$database->deleteData($table,$field,$id);

** To Edit
$database->editData($table,$fields,$where);

** To Select
foreach ($database->selectData($table1,$table2,$linkage,$where,$isjoin,$jointype) as $row) {
	echo $row["field"];
}

** To Login
* Student ID default value is blank
$database->login($type,$username,$password,$studentid='');