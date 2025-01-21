<?php

include 'app/connect.php';

$result= "select * from announcement";
$all=$conn->query($result);
if($all->num_rows==0){echo ("No announcement");}
 
 else
 {
  echo "<body bgcolor='black'>";
  echo "<table align=center";
  	/*echo "<tr><td><font color='Yellow' size=7px>Users that are signed in right now:</td></tr>";*/
 while($row=$all->fetch_array())

 {
 echo "<tr>";
 for($i=0;$i<1;$i++)
// echo "$row[$i]";
echo "<td align=center color=white><font color='white'>".$row[$i]."</td>";
 
echo "<td align=center color=white><font color='white'>".$row[$i]."</td>";
echo "</tr>";
 }
 
 echo "</table>";
 //echo "$qw";
 echo "<div id='mk'>";
 //echo"<alert>test</alert>";
 echo "<script> <type> text/javascript alert('thanks');</script>";
 echo "</div>";
 }
 ?>