
<?php
 
class Database{
	
	public $connection;
 
	public function connect_db(){
		$this->connection = new mysqli('localhost', 'root', 'vinam@123', 'student');
	}

	function __construct()
	{
		$this->connect_db();
	}

	public function create($table_name,$data=array()){
		$sql = "insert into $table_name SET ";
		foreach ($data as $key => $value) {
			$sql.=$key. "=". $value. ",";
		}
		echo $sql; die();
		return $this->connection->query($sql);
	}
}
?>