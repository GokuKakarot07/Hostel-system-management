 
 <?php
include 'app/connect.php';

$result= "select * from student";

 $all=$conn->query($result);

if (!isset($_POST['submit']))
{ 

echo "<body bgcolor='white'>";
  echo "<table align=center bgcolor=#980f0f border=2 style='color: white'";
  echo "<tr> <td align=center colspan= '3'> </td> </tr>";
  echo "<tr><td align=center style='color: white'>id</td><td align=center style='color: white'>name</td><td align=center>absent</td></tr>";
  echo "<tr>";
  ?>
<body style="background-color: #0c2340">
  <form  method = "POST" action="attendance.php">
  <tr><td align=center colspan= '3'><input name='a_date' size='15' style='height: 19px;' type='date' required></td></tr>
  <?php
  while($row=$all->fetch_array())

  {
    
  //for($i=0;$i<2;$i++)
  
  //echo "<td align=center color=cyan><font color='cyan'  size=50px>".$row[$i]."</td>";
  echo "<td><input name='id' type='text' value=".$row['sid']." ></td>";
  echo "<td><input name='name' type='text' value=".$row['sname']." ></td>";
  echo "<td><input name='check' type='checkbox' value='".$row['sid']."' ></td>";
  //echo "<td><input name='su' type='submit' value=".$row['id']." class='form-control'></td>";
   
  echo "</tr>";

  }
  ?>
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
    $astatus = $_POST['check']; 
    
    $sql_attendance=  $conn->query("INSERT INTO attendancestatus (sid,date) values ('$astatus','$date1');");
if(!$sql_attendance)
 {
 echo "error in query execution".$conn->error;
 }
 
?>
<button><a href="attendance.php">Go Back</a></button>
    
    <?php
}
  

  

        

