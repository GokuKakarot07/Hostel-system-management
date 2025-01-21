<?php
include 'app/connect.php';
$query = "insert into maintenance values('$_POST[sid]','$_POST[room_no]','$_POST[reason]',null)";

$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="studentdashboard.php";
</script>