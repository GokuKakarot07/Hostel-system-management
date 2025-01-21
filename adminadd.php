<?php
include 'app/connect.php';
$query = "insert into student values('$_POST[sid]','$_POST[sname]','$_POST[photo]','$_POST[btype]','$_POST[scontact]','$_POST[address]','$_POST[password]','$_POST[course]',$_POST[year],'$_POST[pname]','$_POST[pcontact]','$_POST[food_type]','$_POST[dob]','$_POST[caste]','$_POST[religion]')";
// $query = "update students set photo = '$_POST[photo]',name = '$_POST[name]',father_name = '$_POST[father]',class = '$_POST[class]',sec = '$_POST[sec]',mobile = '$_POST[mob]',email = '$_POST[email]',certificate = '$_POST[certificate]',description = '$_POST[desc]',prize = '$_POST[prize]' where regno = $_POST[regno]";
$query_run = mysqli_query($conn,$query);
?>

<script type="text/javascript">
    alert("Added Successfully");
    window.location.href ="admindashboard.php";
</script>