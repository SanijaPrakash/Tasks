<?php
include "database.php";
include "Student.php";

$database = new Database();
$student  = new Student();
//$database->create("crud", $_POST);

foreach ($_POST as $key => $value) {
	if(array_key_exists($key, $student))
		echo $key ."=>" . $value ."<br />";
}

die();
/*
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$education=$_POST["education"];
$city=$_POST["city"];
*/
// if(isset($_POST) & !empty($_POST)){
// 	$fname = $database->sanitize($_POST['name']);
// 	$lname = $database->sanitize($_POST['lname']);
// 	$email = $database->sanitize($_POST['email']);
// 	$gender = $_POST['gender'];
// 	$age = $_POST['age'];
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table align="center" border=1>
		<tr>
			<th>
				NAME
			</th>
			<th>
				AGE
			</th>
			<th>
				ADDRESS
			</th>

			<th>
				GENDER
			</th>
			<th>
				EDUCATION
			</th>
<th>
	CITY
</th>

		</tr>
		<tr>
			<td>
				<?php echo $name; ?>
			</td>
			<td>
				<?php echo $age; ?>
			</td>
			<td>
				<?php echo $address; ?>
			</td>
			<td>
				<?php echo $gender;?>
			</td>
			<td>
<?php echo $education;?>
<!-- <?php
//foreach ($_POST['education'] as $names)
{
        //echo $names;
}
?> -->
			</td>

			<td>
		<?php echo $city;?>		
			</td>
		</tr>

	</table>

</body>
</html>