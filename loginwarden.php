<html>
<?php
if(!isset($_POST['submit'])){
	?>
<!DOCTYPE html>
<html lang="en" >
<head>

  <link rel="stylesheet" href="adminloginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    
    <form class="login-form" method="post">
    	<h1>Login As Warden</h1>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      
      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
      <br>
      <br>
      <button type="button" name="back" class="btn btn-primary btn-lg btn-block login-btn"><a href="mainpage2.php">Go Back</a></button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="scriptadmin.js"></script>

</body>
</html>

	<?php
	}
	else{
		$connect=mysqli_connect("localhost","root","","final1");

	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "username entered: $username";
?>
<br>
<?php
	$query="select * from ward where wid='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	
	$count=mysqli_num_rows($result);
	if($count>0)
	{
	echo "Login credentils verified";	
	header("Location: wardendashboard.php");
	}
	else{
		echo "Incorrect Login credentals";
	?>
	<button><a href="mainpage2.php">Go Back</a></button>
	
	<?php 
	}

	}

?>
</html>
