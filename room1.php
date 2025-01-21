<?php
include 'app/connect.php';

$result= "select * from room";

 $all=$conn->query($result);

if (!isset($_POST['submit']))
{
?>
<form  method = "POST" action="room1.php">
<?php
    
    echo "<input name='sid' size='15' style='height: 19px;' type='text'>";
    echo "<input type ='submit' name='submit' value='View details'>";
?>
</form>
<?php
    
}
else
{
    $sid = $_POST['sid'];
    //echo "working";
    echo "showing result by sid: $sid";
    $result= "select * from room where sid='$sid'";

 $all=$conn->query($result);
 if($all->num_rows==0){
     echo ("no student in that sid");}
 
 else
 {
    echo " <br> The room details:";
    while($row=$all->fetch_array())
    {
       
        for($i=0;$i<4;$i++){

            echo "<td> <br>".$row[$i]."</td>";
          }
    }
     //echo "$result";
    
 }

}
?>