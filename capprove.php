<?php
include 'app/connect.php';
$query = $conn->query("UPDATE counselling set status = '$_POST[status]' where sid = '$_POST[sid]'");
//$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="wardendashboard.php";
</script>