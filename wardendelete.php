<?php
include 'app/connect.php';
$query = "delete from student where sid = $_POST[sid]";
$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Deleted Successfully");
    window.location.href ="wardendashboard.php";
</script>