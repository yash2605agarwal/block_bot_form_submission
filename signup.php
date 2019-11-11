<?php
session_start();
if(isset($_POST['submit'])){
	$a= filter_input(INPUT_POST, "aa");
	
$sessionCaptcha=$_SESSION['captcha'];
$formCaptcha=$_POST['captcha'];
if($sessionCaptcha == $formCaptcha){
	if($a=="white"){
	echo "VALID USER";
}
}
else{
echo "Invalid User!";
}
}

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Captcha in form</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Name:<input type="text" name="user"><br>
	Type Captcha:<input type="text" name="captcha"><img src="captcha.php"><br>
	Security Question: A panda is black and <input id=white name="aa"><br>
	<input type="submit" name="submit" value="Veryfy">

</form>
</body>
</html>