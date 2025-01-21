<?php
include 'app/connect.php';

$result= "select * from student";

 $all=$conn->query($result);

if (!isset($_POST['submit']))
{
?>
<form  method = "POST" action="attendanceview.php">
<?php
    
    echo "<input name='a_date' size='15' style='height: 19px;' type='date' required>";
    echo "<input type ='submit' name='submit' value='View Absent'>";
?>
</form>
<?php
    
}
else
{
    $date2 = $_POST['a_date'];
    //echo "working";
    echo "showing result by date: $date2";
    $result= "select * from attendancestatus where date='$date2'";

 $all=$conn->query($result);
 if($all->num_rows==0){
     echo ("Everyone are present");}
 
 else
 {
    echo " <br> The absentees are:";
    while($row=$all->fetch_array())
    {
       
        for($i=0;$i<1;$i++){

            echo "<td> <br>".$row[$i]."</td>";
          }
    }
     //echo "$result";
    
 }

}
?>