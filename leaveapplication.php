  
 <?php
include 'app/connect.php';

if (!isset($_POST['submit']))
{
	?>
    

<html>
    <head>
        <meta charset="UTF-8">
        <title>Leave Application</title>
    </head>
    <body>
        <form action="leaveapplication.php" method = "POST">

   
  <br>
   
   <input name="sid" size="15" style="height: 19px;"  type="text" required>

  <input name="f_date" size="15" style="height: 19px;"  type="date" required>

  <input name="t_date" size="15" style="height: 19px;"  type="date" required>

  <input name="reason" size="15" style="height: 19px;"  type="text" required>

  <!--<input name="status" size="15" style="height: 19px;"  type="text" value="Not Approved" required>-->


  
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
  $f_date = $_POST['f_date'];
  $t_date = $_POST['t_date'];
  $reason = $_POST['reason'];
  //$status = $_POST['status'];
  try{
     $sql_leaveapplication =  $conn->query("INSERT INTO leave_application (sid,from_date,to_date,reason) values ('$sid','$f_date','$t_date','$reason');");
     if(!$sql_leaveapplication) {
      $error = "invalid register number";
      throw new Exception($error);
  }   
}
catch (Exception $e) {
  echo $e->getMessage();
  ?>
  <script type="text/javascript">
    alert("Invalid student id.");
    window.location.href ="leaveapplication.php";
</script>
<?php
}
?>
<script type="text/javascript">
    alert("Leave application submitted");
    window.location.href ="leaveapplication.php";
</script>
<?php

     /*if(!$sql_leaveapplication)
 {
 echo "error in query execution".$conn->error;
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