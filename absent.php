<?php
include 'app/connect.php';
$query = "insert into attendancestatus values('$_POST[sid]','$_POST[date]')";
$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="wardendashboard.php";
</script>