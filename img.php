
<?php

$connect=mysqli_connect("localhost","root","vinam@123","student");

if(isset($_POST["insert"]))
{

	$file = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 

$sql = "insert into image (name) VALUES ('{$file}')";
if (mysqli_query($connect,$sql)) { 
    echo '<script> alert("Image inserted")</script'; 
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
<script type="text/javascript" src="validation_reg.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>


<form method="post" enctype="multipart/form-data">
Image : <input type="file" name="image" id="image"/>

<input type="submit" name="insert" value="insert"/>Insert

</form>
</body>
</html>

<script >

	$(document).ready(function(){

$('#insert').click(function(){

	var image_file=$('#image').val();

	if(image_file=='')
	{
		alert("Plz select an img");
		return false;

	}


});

	});
	

</script>
