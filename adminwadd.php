<?php
include 'app/connect.php';
$query = "insert into ward values('$_POST[wid]','$_POST[wname]','$_POST[photo]','$_POST[btype]','$_POST[wcontact]','$_POST[address]','$_POST[password]')";
$query_run = mysqli_query($conn,$query);
?>

<!--<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="admindashboard.php";
</script>