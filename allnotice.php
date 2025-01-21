<?php

include 'app/connect.php';

$result= "select * from announcement";
$all=$conn->query($result);
if($all->num_rows==0){echo ("No announcement");}
 
 else
 {
  echo "<body bgcolor='#980f0f'>";
  echo "<table align=center border=2>";
  echo "<tr><td align=center color=white><font color='white'>notice no.</td><td align=center color=white><font color='white'>Title</td><td align=center color=white><font color='white'>Description</td></tr>";
  	/*echo "<tr><td><font color='Yellow' size=7px>Users that are signed in right now:</td></tr>";*/
 while($row=$all->fetch_array())

 {
 echo "<tr>";
 for($i=0;$i<3;$i++)

echo "<td align=center color=white><font color='white'>".$row[$i]."</td>";
 
//echo "<td align=center color=white><font color='white'><a href='allnotice.php' id='$i'>".$row[$i]."</a></td>";

 echo "</tr>";
 }
 
 echo "</table>";
 }
?>