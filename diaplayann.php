<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ST ALOYSIUS Gents Hostel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Besley&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Besley&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
<?php

include 'app/connect.php';

$result= "select * from announcement";
$all=$conn->query($result);
if($all->num_rows==0){echo ("No announcement");}
 
 else
 {
  echo "<body bgcolor='black'>";
  echo "<table align=center bgcolor=grass border=5>";
  	/*echo "<tr><td><font color='Yellow' size=7px>Users that are signed in right now:</td></tr>";*/
 while($row=$all->fetch_array())

 {
 
 for($i=0;$i<1;$i++)
echo "<tr>";
 echo "<br><td align=center color=cyan><font color='cyan'  size=50px>".$row[$i]."</td><br>";
echo "<td align=center color=cyan><font color='cyan'  size=50px>".$row[$i]."</td><br>";

 echo "</tr>";
 }
 
 echo "</table>";
 }
 ?>