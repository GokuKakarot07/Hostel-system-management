<?php
include 'app/connect.php';
$query = $conn->query("UPDATE student set sname = '$_POST[sname]',photo = '$_POST[photo]',btype = '$_POST[btype]',scontact = '$_POST[scontact]',address = '$_POST[address]', password = '$_POST[password]',course = '$_POST[course]', year = '$_POST[year]', pname = '$_POST[pname]',pcontact = '$_POST[pcontact]', food_type = '$_POST[food_type]',dob = '$_POST[dob]',caste = '$_POST[caste]',religion = '$_POST[religion]' where sid = '$_POST[sid]'");
//$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="wardendashboard.php";
</script>