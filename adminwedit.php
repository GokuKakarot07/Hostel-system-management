<?php
include 'app/connect.php';
$query = $conn->query("UPDATE ward set wname = '$_POST[wname]',photo = '$_POST[photo]',btype = '$_POST[btype]',wcontact = '$_POST[wcontact]',address = '$_POST[address]', password = '$_POST[password]' where wid = '$_POST[wid]'");
//$query_run = mysqli_query($conn,$query);
?>
<!--<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="admindashboard.php";
</script>