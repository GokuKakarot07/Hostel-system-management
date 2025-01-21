<html>
<?php
$connect=mysqli_connect("localhost","root","","final1");

	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "username entered: $username";
?>
<br>
<?php
	$query="select * from student where sid='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	
	$count=mysqli_num_rows($result);
	if($count>0)
	{
	echo "Login credentils verified";	
	header("Location: studentmain.php");
	}
	else{
		echo "Incorrect Login credentals";
	?>
	<button><a href="mainpage2.php">Go Back</a></button>
	
	<?php 
	}

?>
</html>