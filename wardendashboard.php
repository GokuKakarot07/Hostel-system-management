<!DOCTYPE html>
<html>
<head>
	<title>Warden Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Besley&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Besley&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">


	<?php
	include 'app/connect.php';

	?>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #006dae;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: whitesmoke;">Warden Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" >
      <ul class="navbar-nav" >
      	<li class="nav-item">
          <a class="nav-link active" aria-current="page"style="color: whitesmoke;" name="profile" href="">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"style="color: whitesmoke;" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: whitesmoke;" href="wannouncement.php">Announcement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: whitesmoke;" href="mainpage2.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<center>
	<br>

	<!--<h1><b>Admin Dashboard</h1>
</center>

<div id="header">
	<center>
		Email:
	</center>
</div> -->

	<div id="left" style="height: 85%;"><center>
		
		<!--<p style="color: black; font-size: 33px;">Menu</p>-->
		<form method="post">
			<table>
				<tr>
					<td>
						<br>
						<input type="submit" name="search" value="Search Student" class="btn btn-outline-primary">
						<br>
					</td>
				</tr>

				<tr>
					<td>
						<br>
						<input type="submit" name="add" value="Add Student" class="btn  btn-outline-primary">
					</td>
				</tr>

				<tr>
					<td>
						<br>
						<input type="submit" name="edit" value="Edit Student" class="btn btn-outline-primary">
					</td>
				</tr>

				<tr>
					<td>
						<br>
						<input type="submit" name="delete" value="Delete Student" class="btn btn-outline-primary">
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<input type="submit" name="counselling" value="Counselling View" class="btn btn-outline-primary">
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<input type="submit" name="leave" value="Leave Application" class="btn btn-outline-primary">
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<input type="submit" name="main" value="Maintenance" class="btn btn-outline-primary">
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<input type="submit" name="att" value="Attendance" class="btn btn-outline-primary">
					</td>
				</tr>
				<tr>
					<td>
						<br>
						<input type="submit" name="room" value="Room" class="btn btn-outline-primary">
					</td>
				</tr>
			</table>
		</form>
	</div>
	</center>
		

	<div id="right" style="height: 85%;">
		<div id="content">
			<?php
				if (isset($_POST['search'])) {
					?>
					<center>
						<form method="post" ><br><br>
							Register Number: 
							<input type="text" name="sid" style="width: 300px;">
							<input class="btn btn-outline-primary" type="submit" name="forsearch" value="Search">
						</form>
					</center>
					<?php
				}
				if (isset($_POST['forsearch'])) {
					$query = "select * from student where sid = '$_POST[sid]'";
				    $query_run = mysqli_query($conn,$query);
				    if(!$query){
				    	echo '<script>alert("Student Data Not Found")</script>';
				    }

				    while($row = mysqli_fetch_assoc($query_run)){
				    	?>
				    	<center><br>
							<h3><b>Student Detail's</b></h3><br>
						<table>
				    		<tr>
				    			<td>
				    				Photo: 
				    			</td>
				    			<td><img height="80px;" width="80px;" value="<?php echo $row['photo'];?>"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Register Number: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['sid'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Name: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['sname'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Date of Birth: 
				    			</td>
				    			<td><input type="Date" value="<?php echo $row['dob'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Name: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['pname'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Student Contact: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['scontact'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Contact: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['pcontact'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Address: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['address'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Password: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['password'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Blood Type: 
				    			</td>
				    			<td><input type="text" class="btn" value="<?php echo $row['btype'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Course: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['course'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Year: 
				    			</td>
				    			<td><input type="Number" value="<?php echo $row['year'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Food Type: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['food_type'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				caste: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['caste'];?>" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Religion: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['religion'];?>" disabled></td>
				    		</tr>
				    	</table></center>
				    	<?php
				    }

				}
			?>

			<?php
				if (isset($_POST['add'])) {
					?>
					<form action="wardenadd.php" method="post">
						<center><br>
							<h3><b>Add Student Detail's</b></h3><br>
						<table>
				    		<tr>
				    			<td>
				    				Photo: 
				    			</td>
				    			<td><input type="file" name="photo"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Student ID: 
				    			</td>
				    			<td><input type="text" name="sid"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Student Name: 
				    			</td>
				    			<td><input type="text" name="sname"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Date of Birth: 
				    			</td>
				    			<td><input type="date" name="dob"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Name: 
				    			</td>
				    			<td><input type="text" name="pname"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Student Contact: 
				    			</td>
				    			<td><input type="text" name="scontact"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Contact: 
				    			</td>
				    			<td><input type="text" name="pcontact"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Address: 
				    			</td>
				    			<td><input type="text" name="address"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Password: 
				    			</td>
				    			<td><input type="text" name="password"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Blood Type: 
				    			</td>
				    			<td><select name="btype">
				    				<option value="A+">A+</option>
				    				<option value="A-">A-</option>
				    				<option value="B+">B+</option>
				    				<option value="B-">B-</option>
				    				<option value="O+">O+</option>
				    				<option value="O-">O-</option>
				    				<option value="AB+">AB+</option>
				    				<option value="AB-">AB-</option>
				    			</select></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Course: 
				    			</td>
				    			<td><input type="text" name="course"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Year: 
				    			</td>
				    			<td><input type="Number" name="year"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Food Type: 
				    			</td>
				    			<td><input type="text" name="food_type"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				caste: 
				    			</td>
				    			<td><input type="text" name="caste"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Religion: 
				    			</td>
				    			<td><input type="text" name="religion"></td>
				    		</tr>
								<td></td>
								<td>&emsp;&emsp;
									<input type="submit" class="btn btn-outline-primary" name="update" value="Save">
								</td>
							</tr>
				    	</table></center>
						</form>
						<?php
				    }

				
			?>

			<?php
				if (isset($_POST['edit'])) {
					?>
					<center>
						<form method="post"><br><br>
							Register Number: 
							<input type="text" name="sid" style="width: 300px;">
							<input class="btn btn-outline-primary"type="submit" name="foredit" value="Search">
						</form>
					</center>

					<?php
				}
				if (isset($_POST['foredit'])) {
					$query = "select * from student where sid = '$_POST[sid]'";
				    $query_run = mysqli_query($conn,$query);

				    while($row = mysqli_fetch_assoc($query_run)){
				    	?>
				    	<form action="wardenedit.php" method="post">
				    		<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
						<center><br>
							<h3><b>Edit Student Detail's</b></h3><br>
						<table>
				    		<tr>
				    			<td>
				    				Photo: 
				    			</td>
				    			<td><input type="file" name="photo" value="<?php echo $row['photo'];?>"></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Register Number: 
				    			</td>
				    			<td><input type="text" value="<?php echo $row['sid'];?>" name="sid" disabled></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Name: 
				    			</td>
				    			<td><input type="text" name="sname" value="<?php echo $row['sname'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Date of Birth: 
				    			</td>
				    			<td><input type="Date" name="dob" value="<?php echo $row['dob'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Name: 
				    			</td>
				    			<td><input type="text" name="pname" value="<?php echo $row['pname'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Student Contact: 
				    			</td>
				    			<td><input type="text" name="scontact" value="<?php echo $row['scontact'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Parent Contact: 
				    			</td>
				    			<td><input type="text"name="pcontact" value="<?php echo $row['pcontact'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Address: 
				    			</td>
				    			<td><input type="text" name="address" value="<?php echo $row['address'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				password: 
				    			</td>
				    			<td><input type="text" name="password" value="<?php echo $row['password'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Blood Type: 
				    			</td>
				    			<td><select name="btype" value="<?php echo $row['btype'];?>">
				    				<option value="A+">A+</option>
				    				<option value="A-">A-</option>
				    				<option value="B+">B+</option>
				    				<option value="B-">B-</option>
				    				<option value="O+">O+</option>
				    				<option value="O-">O-</option>
				    				<option value="AB+">AB+</option>
				    				<option value="AB-">AB-</option>
				    			</select></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Course: 
				    			</td>
				    			<td><input type="text" name="course" value="<?php echo $row['course'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Year: 
				    			</td>
				    			<td><input type="text" name="year" value="<?php echo $row['year'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Food Type: 
				    			</td>
				    			<td><input type="text" name="food_type" value="<?php echo $row['food_type'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				caste: 
				    			</td>
				    			<td><input type="text" name="caste" value="<?php echo $row['caste'];?>" ></td>
				    		</tr>
				    		<tr>
				    			<td>
				    				Religion: 
				    			</td>
				    			<td><input type="text" name="religion" value="<?php echo $row['religion'];?>" ></td>
				    		</tr>
								<td></td>
								<td>&emsp;&emsp;
									<input type="submit" class="btn btn-outline-primary" name="update" value="Update">
								</td>
							</tr>
				    	</table></center>
						</form>
				    	<?php
				    }

				}
			?>

			<?php
				if (isset($_POST['delete'])) {
					?>
					<center>
						<form action="wardendelete.php" method="post"><br>
							<h3>Delete Student Detail's</h3><br>
							Register Number: 
							<input type="text" name="sid" style="width: 300px;">
							<input class="btn btn-outline-primary" type="submit" name="fordelete" value="Delete Student">
						</form>
					</center>
					<?php
				}
				?>
			<?php
				if (isset($_POST['counselling'])) {
					echo "<br><center><br><h3>Counseliing</h3>";
					echo "<table>
				    		<tr>
				    			<td>Register Number</td>
				    			<td>Date</td>
				    			<td>Time</td>
				    			<td>Status</td>
				    		</tr>";
					$query = "select * from counselling";
				    $query_run = mysqli_query($conn,$query);
				    while($row = mysqli_fetch_assoc($query_run)){
				    	if (is_null($row['status'])){
					?>
					<center>
						<form method="post" action="capprove.php"><br>
							<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
				    		<tr>
				    			<td><?php echo $row['sid'];?></td>
				    			<td><?php echo $row['date'];?></td>
				    			<td><?php echo $row['time'];?></td>
				    			<td colspan="2"><br><input type="submit" name="status" value="Accepted" class="btn btn-outline-primary"><input type="submit" name="status" value="Declined" class="btn btn-outline-primary"></td>
				    		</tr>
				    <?php
				}
				}
				}
				?>
				
				    	</table>

			<?php
				if (isset($_POST['leave'])) {
					echo "<center><br><h3>Leave Application</h3>";
					echo "<table>
				    		<tr>
				    			<td>Register Number</td>
				    			<td>From Date</td>
				    			<td>To Date</td>
				    			<td>Reason</td>
				    			<td>Status</td>
				    		</tr>";
					$query = "select * from leave_application";
				    $query_run = mysqli_query($conn,$query);
				    while($row = mysqli_fetch_assoc($query_run)){
				    	if (is_null($row['status'])){
					?>
					<center>
						<form method="post" action="wleave.php"><br>
							<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
				    		<tr>
				    			<td><?php echo $row['sid'];?></td>
				    			<td><?php echo $row['sid'];?></td>
				    			<td><?php echo $row['from_date'];?></td>
				    			<td><?php echo $row['to_date'];?></td>
				    			<td><?php echo $row['reason'];?></td>
				    			<td><input type="submit" name="status" value="Accepted" class="btn btn-outline-primary"><input type="submit" name="status" value="Declined" class="btn btn-outline-primary"></td>
				    		</tr>
				    <?php
				}
				}
			}
				
				?>
				
				    	</table>
				    	<?php
				if (isset($_POST['main'])) {
					$query = "select * from maintenance";
				    $query_run = mysqli_query($conn,$query);
				    while($row = mysqli_fetch_assoc($query_run)){
				    	if (is_null($row['status'])){
					echo "<center><br><h3>Maintanence</h3>";
					echo "<table>
				    		<tr>
				    			<td>Register Number</td>
				    			<td>Room No</td>
				    			<td>Issue</td>
				    			<td>Status</td>
				    		</tr>";
					
					?>
					<center>
						<form method="post" action="wmain.php"><br>
							<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
				    		<tr>
				    			<td><?php echo $row['sid'];?></td>
				    			<td><?php echo $row['room_no'];?></td>
				    			<td><?php echo $row['issue'];?></td>
				    			<td><input type="submit" name="status" value="Accepted" class="btn btn-outline-primary"><input type="submit" name="status" value="Declined" class="btn btn-outline-primary"></td>
				    		</tr>
				    <?php
				}else{
					echo "<center><h3>No Maintenance Request";
					}
				}
			}
				
				?>
				
				    	</table>
				    	<?php
				if (isset($_POST['att'])) {
					?>
					<center><br>
						<h1>Attendance</h1>
						<form method="post" action="absent.php"><br><br>
							<table><tr><td>
							Register Number:</td> 
							<td><input type="text" name="sid" style="width: 300px;" required><br></td>
							<br></tr><tr><td>
							Date:</td><td><br><input type="date" name="date" required><br><br></td></tr><tr><td></td></td><td>
							<input class="btn btn-outline-primary"type="submit" name="att" value="Submit"></td></tr>
						</table></form>

					</center>
				<?php
					}
				?>
				<?php
				if (isset($_POST['room'])) {
					?>
					<form action="roomall.php" method="post">
						<center><br>
							<h3><b>Room Allotment</b></h3><br>
							<table><tr><td>
							Enter Student ID: 
							</td><td><input type="text" name="sid" required>
							<br></td></tr>
							<tr><td><br>Enter Room No:</td><td><br><input type="text" name="room_no" required></td></tr>
							<tr><td><br>Enter Floor No:</td><td><br><input type="Number" name="floor_no"  required></td></tr>
							<tr><td><br>Enter Block No:</td><td><br><input type="text" name="block_no" required></td></tr>
							<tr><td></td><td><br><input class="btn btn-outline-primary" type="submit" name="room" value="Submit"></td></tr>
				    </center>
				</form>
				<?php
			}
				?>
				
			
		</div>
	</div>

</body>
</html>