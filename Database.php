<?php 
class Database
{
	public $host="localhost";
	public $user="root";
	public $pass="vinam@123";
	public $db="student";
	public $con=NULL;
	function __construct()
	{
		$this->con= new mysqli($this->host,$this->user,$this->pass,$this->db); 
	
	}
	public function saveRecords($tbName,$u,$p)
	{
		$sql="insert into $tbName values('','".$u."','".$p."')";
 		return $this->conn->query($sql);
	}
}

$obj=new Database();
//extract($_POST);
$username=$_POST["userName"];
$Pass=$_POST["Pass"];
if(isset($save))
{
$obj->saveRecords("admin",$userName,$Pass);
echo "Records Saved ";
}
?>

<html>
<form method="post" action="stringop.php">
    Enter your user id  <input type="text" name="userName"/>
  
    enter your password <input type="text" name="Pass"/>
 	<input type="submit" value="save" name="save"/>
	</form>
</html>
