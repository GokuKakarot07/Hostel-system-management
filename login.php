<?php
session_start();

if(!isset($_POST['submit'])){
}
else{

	$username = $_POST['username'];
$password = $_POST['password'];
echo "$username";
echo "$password";
/*
	$sql = "SELECT username,password FROM studentuser WHERE username=?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s",$username);
	$stmt->execute();

	$stmt->bind_result($db_username,$db_pass);
	if($stmt->fetch()){
		
		$_SESSION['name'] = $db_name;
	if($password == $password){
 
 header("location:Admin.php");
 }
		$pass_decode = password_verify($password, $db_pass);

		if($pass_decode){
			$username = $_POST['username'];
*/
			$result = "SELECT username,password FROM studentuser WHERE username=?";
	$stmt = $conn->prepare($result);
	$stmt->bind_param("s",$username);
	$stmt->execute();

	$stmt->bind_result($db_username,$db_name,$db_pass);


	/*$result = $conn->query("select username,password from studentuser where username='$username'");

 if(!$result){
 echo "error in query execution " .$conn->error;
 }
 $rows = $result->fetch_assoc();*/
 $username1 = $rows['username'];
 $password1 = $rows['password'];

 echo "$username1";
echo "$password1";
 if($password == $password){
 
 /*header("location:Admin.php");*/
 		
echo "<br>Login successful";
				
				/*include 'roombook.php';*/

		}else{
			?>
			<script>alert("Incorrect Username or Password")</script>

			<?php
			
		}
	







}
?>