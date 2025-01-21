<?php
include 'app/connect.php';
$query = "insert into announcement values($_POST[aid],'$_POST[atitle]','$_POST[a_desc]')";

$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="wardendashboard.php";
</script>