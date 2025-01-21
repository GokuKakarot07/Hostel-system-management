
 <?php
include 'app/connect.php';


if (!isset($_POST['submit']))
{
	?>
    

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="insert1.php" method = "POST">

   
  Last Name:<br>
   
  <input name="LastName" size="15" style="height: 19px;"  type="text" required>

  <br><br>

  

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
<button type ="reset" name="reset" value="reset"> reset </button>
</form>
    </body>
</html>   
<?php
}
else{
	
	$Lastname = $_POST['LastName'];
    


     $sql = "INSERT INTO test1 (name) values (?)";


		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s",$Lastname);
		$result = $stmt->execute();

			if($result){
				echo '<script>alert("data inserted")</script>';
				
header("Location: mainpage2.php");

			}



 }
?>
