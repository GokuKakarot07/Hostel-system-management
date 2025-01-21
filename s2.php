<?php

include 'app/connect.php';
if (!isset($_POST['submit']))
{
?>

<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="post" action="s2.php">
      <h5>enter sid for student data</h5>
      <input type="text" name="sid">
      <input type="submit" name="submit">
    </form>
  </body>
  </html>
  <?php
}
  else{
    $sid= $_POST['sid'];
     $result= "select * from student where sid='$sid'";

 $all=$conn->query($result);
 /*if($all->num_rows==0)
  {
    echo ("No data");
}
 
 else
 {*/
  echo "<body bgcolor='black'>";
  echo "<table align=center bgcolor=grass border=5";
    echo "<tr><td align=center><font color='Yellow' size=7px> student data:</td></tr>";
    echo "<tr>";
 /* echo "<td align=center color=cyan><font color='red'  size=50px> sid </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> name </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> requested date </td>";
  echo "<td align=center color=cyan><font color='red'  size=50px> requested time </td>";
  echo "</tr>";*/
 echo "<tr>";
 while($row=$all->fetch_array())

 {
  
 for($i=0;$i<15;$i++)

 echo "<td align=center color=cyan><font color='cyan'  size=50px>".$row[$i]."</td>";

 echo "</tr>";
 }
 echo "<tr>";
 echo "<form method='post' action='edit.php'>";
 echo "<input type='submit' name='edit' value='Edit'>";

 echo "</tr>";
 echo "</table>";
  }
 
// }

//above is fetching and displaying of applications

 //below is accepting of them



?>