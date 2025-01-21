 
 <?php
include 'app/connect.php';

$result= "select * from student";

 $all=$conn->query($result);

if (!isset($_POST['submit']))
{ 

echo "<body bgcolor='white'>";
  echo "<table align=center bgcolor=#980f0f border=2";
  echo "<tr> <td align=center colspan= '3'> </td> </tr>";
  echo "<tr><td align=center style='color: white'>Absence List</td></tr>";
  echo "<tr>";
  ?>
<body style="background-color: #0c2340">
  <form  method = "POST" action="attendance.php">
  <tr><td align=center colspan= '3'><input name='a_date' size='15' style='height: 19px;' type='date' required></td></tr>
  <tr><td>Enter the Register Number</td><td><input type="text" name="reg"></td></tr>
 <tr> <td colspan= '3' align='center'> <button type ="submit" name="submit" value="send to database"> Mark as Absent </button> </td> </tr>
 </tab>
 
    
    </form>
  <?php
}
else
{
   // $aid = $_POST['su'];
    //echo "$aid";
    $date1 = $_POST['a_date'];
    //$name = $_POST['name'];
    $astatus = $_POST['reg']; 
    
    $sql_attendance=  $conn->query("INSERT INTO attendancestatus (sid,date) values ('$astatus','$date1');");
if(!$sql_attendance)
 {
 echo "error in query execution".$conn->error;
 }
 
?>
<button><a href="att.php">Go Back</a></button>
    
    <?php
}
	

  

        

