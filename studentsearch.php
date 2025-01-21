<?php
include 'app/connect.php';
$query = "select * from student where sid = '$_POST[sid]'";
				    $query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="admindashboard.php";
</script>