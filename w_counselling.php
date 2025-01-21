<?php

include 'app/connect.php';

  $result= "select * from counselling";

 $all=$conn->query($result);
 if($all->num_rows==0){echo ("No leave applications");}
 
 else
 {
  echo "<body bgcolor='black'>";
  echo "<table align=center bgcolor=grass border=5";
    echo "<tr><td align=center><font color='Yellow' size=7px> leave applications:</td></tr>";
    echo "<tr>";
  echo "<td align=center color=cyan><font color='red'  size=50px> id </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> name </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> requested date </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> requested time </td>";
  echo "</tr>";
 echo "<tr>";
 while($row=$all->fetch_array())

 {
  
 for($i=0;$i<4;$i++)

 echo "<td align=center color=cyan><font color='cyan'  size=50px>".$row[$i]."</td>";

 echo "</tr>";
 }
 
 echo "</table>";
 }

//above is fetching and displaying of applications

 //below is accepting of them



?>
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
        <form action="w_counselling.php" method = "POST">

   
  <br>
   
   <input name="sid" size="15" style="height: 19px;"  type="number" required>
<!--
  <input name="name" size="15" style="height: 19px;"  type="text" required>

  <input name="r_date" size="15" style="height: 19px;"  type="date" required>

  <input name="r_time" size="15" style="height: 19px;"  type="time" required>
-->
  <input name="a_date" size="15" style="height: 19px;"  type="date" required>

  <input name="a_time" size="15" style="height: 19px;"  type="time" required>
  <!--<input name="status" size="15" style="height: 19px;"  type="text" required>-->
  <input name="status" list="status" type="text">
  <datalist id="status">
    <option value="Accepted"/>
    <option value="Declined"/>
    <option value="Pending"/>
</datalist>
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
 // $name = $_POST['name'];
 // $r_date = $_POST['r_date'];
  //$r_time = $_POST['r_time'];
  $a_date = $_POST['a_date'];
  $a_time = $_POST['a_time'];
  $status = $_POST['status'];

  
    


     $sql_w_counselling =  $conn->query("UPDATE counselling SET a_date = '$a_date', a_time = '$a_time', status = '$status' WHERE sid = '$sid'");
if(!$sql_w_counselling)
 {
 echo "error in query execution".$conn->error;
 }
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
