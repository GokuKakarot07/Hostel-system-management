<?php
include 'app/connect.php';
$query = "insert into room values('$_POST[sid]','$_POST[room_no]',$_POST[floor_no],'$_POST[block_no]')";
$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="wardendashboard.php";
</script>