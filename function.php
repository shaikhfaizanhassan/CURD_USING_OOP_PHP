<?php  
	//Define a constant variable
	define('dbserver', 'localhost');
	define('dbuser', 'root');
	define('dbpass', '');
	define('dbDatabaseName', 'oopdb');

	//create a class 
	class Database
	{
		//Constructor to call automatically database connection after object create
		function __construct()
		{
			$con = mysqli_connect(dbserver,dbuser,dbpass,dbDatabaseName);
			$this->dbh = $con;
			if(mysqli_connect_error())
			{
				echo "Failed to connect MYSQL " . mysqli_connect_error();
			}
		}
		//function create new record
		public function insert($name,$email,$password)
		{
			$ret = mysqli_query($this->dbh,"insert into studenttb (name,email,password) 
				values ('$name','$email','$password')");

			return $ret;
		}
		//function select all data from table
		public function SelectAll()
		{
			$result = mysqli_query($this->dbh,"select * from studenttb");
			return $result;
		}
		//function select all data using by id
		public function SelectDataBYID($stdID)
		{
			$selectbyID = mysqli_query($this->dbh,"select * from studenttb where id='$stdID'");
			return $selectbyID;
		}
		//function update all record using giving ID
		public function UpdateData($stdid,$name,$email,$password)
		{
			$update = mysqli_query($this->dbh,"update from student set name='$name', email='$email', password='$password' where id='$stdid'");
			return $update;
		}
		//function delete all record using giving ID
		public function DeleteData($stdid)
		{
			$delete = mysqli_query($this->dbh,"delete from studenttb where id='$stdid'");
			return $delete;
		}
	}

?>