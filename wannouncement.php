<?php
include 'app/connect.php';
  ?>
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
          <a class="nav-link active" aria-current="page"style="color: whitesmoke;" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: whitesmoke;" href="wardendashboard.php">Dashboard</a>
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
  <br>
  <div id="center">
    <h1><b>Announcement Post</b></h1>
    <br><br>
    <?php
    if (!isset($_POST['submit']))
{
  $query = "SELECT * FROM announcement ORDER BY a_id DESC LIMIT 1";
  $query_run = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    //$aid = row['$a_id'];
    //$aid = $aid + 1;
  ?>
    <form action="announce.php" method="post">
    <table>
      <tr>
        <td>Announcement No</td>
        <td><input type="Number" name="aid" ></td>
      </tr>
      <tr>
        <td>
          Anouncement Title:
        </td>
        <td>
          <input type="text" name="atitle" style="width: 300px; height: 50px" required>
          <br>
        </td>

      </tr>
      <tr>
        <td><br>Detailed Announcement:</td>
        <td><br><input type="text" name="a_desc"  style="width: 300px; height: 100px" required></td>
      </tr>
      <tr>
        <td ></td><td><br><input type="submit" value="Submit" class="btn  btn-outline-primary"></td>
      </tr>
    </table>
  </form>
  </div>
</center>
</body>
</html>
<?php

}
 }
?>
