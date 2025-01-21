  
 <?php
include 'app/connect.php';

if (!isset($_POST['submit']))
{
	?>
    

<html>
    <head>
        <meta charset="UTF-8">
        <title>counselling</title>
    </head>
    <body>
        <form action="s_counselling.php" method = "POST">

   
  <br>
   
   <input name="sid" size="15" style="height: 19px;"  type="text" required>

  <!--<input name="name" size="15" style="height: 19px;"  type="text" required>-->

  <input name="r_date" size="15" style="height: 19px;"  type="date" required>

  <input name="r_time" size="15" style="height: 19px;"  type="time" required>
<!--
  <input name="a_date" size="15" style="height: 19px;"  type="date" required>

  <input name="a_time" size="15" style="height: 19px;"  type="time" required>
  <input name="status" size="15" style="height: 19px;"  type="text" required>
-->
  <br><br>

  

<button type ="submit" name="submit" value="send to database"> Submit </button>
<button type ="reset" name="reset" value="reset"> reset </button>
</form>
    </body>
</html>   
<?php
}
else{


  $sid = $_POST['sid'];
  //$name = $_POST['name'];
  $r_date = $_POST['r_date'];
  $r_time = $_POST['r_time'];
  //$a_date = $_POST['a_date'];
  //$a_time = $_POST['a_time'];
	//$status = $_POST['status'];

	$a = $conn->query("SELECT sid from student where sid='$sid'");
  if($a){
    //echo '<script type="text/javascript">window.onload = function () {alert("Student Not Found");}</script>';
    $sql_s_counselling =  $conn->query("INSERT INTO counselling (sid,r_date,r_time) values ('$sid','$r_date','$r_time');");
}
else{
  echo '<script type="text/javascript">window.onload = function() {alert("Student Not Found");}</script>';
  }


    //$sql_s_counselling =  $conn->query("INSERT INTO counselling (sid,r_date,r_time) values ('$sid','$r_date','$r_time');");

/*if(!$sql_s_counselling)
 {
  echo '<script>alert("error")</script>';
 // include 'mainpage2.php';
 //echo "student not found";
 }*/
/*
		$stmt = $conn->prepare($sql_s_counselling);
		$stmt->bind_param("isdddds",$sid,$name,$r_date,$r_time,$a_date,$a_time,$status);
		$result = $stmt->execute();
			if($result){
				echo '<script>alert("data inserted")</script>';

			}
      else{
        echo '<script>alert("error")</script>';
      }

*/

 }
?>
