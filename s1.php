<?php
include 'app/connect.php';

if (!isset($_POST['submit']))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="s1.php">
			<input type="text" name="sid">
			<input type="submit" name="submit">
		</form>
	</body>
	</html>
	<?php
}else{
	$sid= $_POST['sid'];
	$a = $conn->query("SELECT * from student where sid='$sid'");
	if(!$a)
 {
  echo "nn";
 }
 else{

 	echo "$a";
 }
}
?>