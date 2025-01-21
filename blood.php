 <!DOCTYPE html>
 <html>
 <head>
   <title>Blood</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Besley&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Besley&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
 </head>
 
 <?php
include 'app/connect.php';

//$result= "select * from student";

 //$all=$conn->query($result);

 include 'navbar.php';
 
if (!isset($_POST['submit']))
{ 
    ?><center>
    <table style="border: 2px; background-repeat: white; align-content: center;">
    <body style="background-color: #0c2340">
  <form  method = "POST" action="blood.php">
    <tr style="color:white"><td align="center" ><h4>Enter blood group to search</h4> </td></tr><br>
  <tr><td colspan="2" align="center"><br><select name="bg">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select></td></tr>
  <tr><td colspan="2" align="center"><br><input name='submit' type='submit' class="btn btn-light"></td></tr>
</table>
  <?php

}
else{
    $bg = $_POST['bg']; 
    echo "<h4 align='center'>searching for :  $bg</h4>";
    $query = "select * from student where btype = '$_POST[bg]'";
    $query_run = mysqli_query($conn,$query);
    if(!$query){
        echo '<script>alert("Required Data Not Found")</script>';
    }
    echo "<h3 align='center'><b>Blood Group Availability</b></h3><br>";
    while($row = mysqli_fetch_assoc($query_run)){
       // echo $row['sname'];
       ?>
				    	<center><br>
							
						<table style="border: 2px; background-repeat: white; align-content: center;">
				    		<tr>
				    			
				    			<td>Name:</td><td><?php echo $row['sname'];?></td></tr>
                                <tr><td>Phone:</td><td><?php echo $row['scontact'];?></td>
				    		</tr>
    </table>
                            <?php
    }
   
}
?>


