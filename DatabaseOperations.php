<?php

class DatabaseOperations 
{
	public $hostname='localhost';
	public $user='root';
	public $pass='vinam@123';
	public $database='student';
	public $conn=NULL;
	
	function __construct() 
	{
    	$this->conn = new mysqli($this -> hostname,$this -> user,$this -> pass,$this -> database);
			
	}
	
	function disp($sql)
	{
	    return $this->conn->query($sql);

	}

}

$obj=new DatabaseOperations();
$query = "insert into stud values (NULL,'sani', 'sani@gmail.com', 1)";
$ins=$obj->disp($query);
$query = "insert into stud values (NULL,'sano', 'sano@gmail.com', 3)";
$ins=$obj->disp($query);
$query="delete from stud where id=2";
$del=$obj->disp($query);
$res=$obj->disp("select * from stud");
while($data = $res->fetch_object())
{
	print_r($data);
}
