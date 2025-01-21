<?php
include 'app/connect.php';
$query = "insert into counselling values('$_POST[sid]','$_POST[date]','$_POST[time]',null)";

$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="studentdashboard.php";
</script>