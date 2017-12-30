HOW TO USE
* First include connection and instantiate

include_once 'inc/connection.php';
$database = new Connection();

* CRUD

** To Insert
$database->insertData("tbladmin","username,password",":username, :password",array(':username' => 'admin'  , ':password' => md5('abc123')));

** To Delete
$database->deleteData("tbladmin","record_num",3);

** To Edit
$database->editData("tbladmin","`username` = 'mojoejoe'","record_num=4");

** To Select
foreach ($database->selectData("tbladmin","") as $row) {
	echo $row["record_num"].' - '.$row["username"];
}