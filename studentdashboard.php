<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
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
    <a class="navbar-brand" href="#" style="color: whitesmoke;">Student Dashboard</a>
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

	<div id="left"><center>
    <form method="post">
      <table>
        <tr>
          <td>
            <br>
            <input type="submit" name="leave" value="Leave Application" class="btn btn-outline-primary">
            <br>
          </td>
        </tr>
		    <tr>
          <td>
            <br>
            <input type="submit" name="counsell" value="Counselling" class="btn  btn-outline-primary">
          </td>
        </tr>
        <tr>
          <td>
            <br>
            <input type="submit" name="main" value="Maintenance" class="btn  btn-outline-primary">
          </td>
        </tr>
        <tr>
          <td>
            <br>
            <input type="submit" name="att" value="Attendance" class="btn  btn-outline-primary">
          </td>
        </tr>
      </table>
    </form>
  </div>
  </center>
    

  <div id="right">
    <div id="content">
      <?php
        if (isset($_POST['leave'])) {
      ?>
      <center>
        <form action="leave.php" method="post">
          <table>
            <tr>
              <br>
              <h1>Leave Application</h1>
            </tr>
            <tr>
              <td>
                <br>
                Enter the Register Number
              </td>
            <td>
              <input type="text" name="sid" required>
            </td>
            </tr>
            <tr>
              <td><br>Enter from Date</td>
              <td><input type="Date" name="from_date" required></td>
            </tr>
            <tr>
              <td><br>Enter to Date</td>
              <td><input type="Date" name="to_date" required></td>
            </tr>
            <tr>
              <td><br>Reason</td>
              <td><input type="text" name="reason" required></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="submit" value="Submit" class="btn btn-outline-primary"></td>
            </tr>
          </table>
        </form>
        <?php

      }
        ?>
      </center>
      <?php
        if (isset($_POST['counsell'])) {
      ?>
      <center>
        <form action="counsell.php" method="post">
          <table>
            <tr>
              <br>
              <h1>Counselling Appointment</h1>
            </tr>
            <tr>
              <td>
                <br>
                Enter the Register Number
              </td>
            <td>
              <input type="text" name="sid" required>
            </td>
            </tr>
            <tr>
              <td><br>Enter The Date</td>
              <td><input type="Date" name="date" required></td>
            </tr>
            <tr>
              <td><br>Enter the Time</td>
              <td><input type="Time" name="time" required></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="submit" value="Submit" class="btn btn-outline-primary"></td>
            </tr>
          </table>
        </form>
        <?php

      }
        ?>
        <?php
        if (isset($_POST['main'])) {
      ?>
      <center>
        <form action="maintenance.php" method="post">
          <table>
            <tr>
              <br>
              <h1>Maintenance Request</h1>
            </tr>
            <tr>
              <td>
                <br>
                Enter the Register Number
              </td>
            <td>
              <input type="text" name="sid" required>
            </td>
            </tr>
            <tr>
              <td><br>Enter the room number</td>
              <td><input type="text" name="room_no" required></td>
            </tr>
            <tr>
              <td><br>Reason</td>
              <td><input type="text" name="reason" required></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="submit" value="Submit" class="btn btn-outline-primary"></td>
            </tr>
          </table>
        </form>
        <?php

      }
        ?>
        <?php
        if (isset($_POST['att'])) {
          ?>
          <center>
            <form method="post" ><br><br>
              Register Number: 
              <input type="text" name="sid" >
              <input class="btn btn-outline-primary" type="submit" name="foratt" value="Search">
            </form>
          </center>
          <?php
        }
        if (isset($_POST['foratt'])) {
          $query = "select * from attendancestatus where sid = '$_POST[sid]'";
            $query_run = mysqli_query($conn,$query);
            if(!$query){
              echo '<script>alert("Student Data Not Found")</script>';
            }else{
            echo "<center><br>
              <h3><b>Attendance Detail's</b></h3><br>
              <table>
                <tr>
                  <td><br>Date of Absent</td>
                </tr>";
            while($row = mysqli_fetch_assoc($query_run)){
              ?>
              
                <tr>
                  <td><br><?php echo $row['date'];  ?></td>
                </tr>
                <?php 
              }
              }
            }
                 ?>
              </table>
            </center>
          </center>
        </div>
      </div>
    </div>
  </center>
</body>
</html>