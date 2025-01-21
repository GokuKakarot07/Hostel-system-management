<?php
include 'app/connect.php';
//try{
    echo "$sid";
$query = "delete from student where sid = $_POST[sid]";
$query_run = mysqli_query($conn,$query);
/*
if(!$query) {
    $error = "data doesnot exist";
    throw new Exception($error);
}   
}
catch (Exception $e) {
echo $e->getMessage();
}*/?>
if(!$query) {
    <script type="text/javascript">
    alert("error");
    window.location.href ="admindashboard.php";
</script>
}
else{
    <script type="text/javascript">
    alert("Deleted Successfully");
    window.location.href ="admindashboard.php";
</script>
}

