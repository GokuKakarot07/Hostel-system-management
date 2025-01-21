<?php
include 'app/connect.php';
$status = null;
$query = "insert into leave_application values('$_POST[sid]','$_POST[from_date]','$_POST[to_date]','$_POST[reason]',null)";

$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="studentdashboard.php";
</script>