
<!DOCTYPE HTML>  
<html>
<body>
<?php
$nameerr=$name=$ageerr=$gendererr=$montherr=$terms=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "required";
   } 
   else {
    $name = $_POST["name"];
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $nameerr = "invalid characters";
	     }
 	}
	if(empty($_POST["age"]))
	{
		$ageerr="required";
	}
	if(empty($_POST["rdbtn"]))
	{
		$gendererr="required";
	}
	if(empty($_POST["month"]))
	{
		$montherr="Month is required";
	}
	if(empty($_POST["terms"]))
	{
		$terms="check terms";
	}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <p>name: <input type="text" name="name" /> <?php echo $nameerr;?> </p>
 <p>age: <input type="number" name="age" /><?php echo $ageerr;?>  </p>
 <p> Gender: <input type="radio" name="rdbtn" value="male"/>Male </p>
 <p>  <input type="radio" name="rdbtn" value = "female"/> female   <?php echo $gendererr;?></p>
        <p>Month: <select name="month">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>             <?php echo $montherr;?>
     <p><input type="checkbox" name="terms" value="Y"> I accept the terms.     <?php echo $terms;?> </p>
     <p><input type="submit" name="register" value="Registraion"  /></p>
	 <p><input type="reset" name="Cancel" value="Cancel" /></p>
</form>
</body>
</html>