<?php
include 'app/connect.php';
try{
    $query = $conn->query("UPDATE leave_application set status = '$_POST[status]' where sid = '$_POST[sid]'");
    if(!$query) {
        $error = "data doesnot exist";
        throw new Exception($error);
    }   
}
catch (Exception $e) {
    echo $e->getMessage();
}



//$query_run = mysqli_query($conn,$query);
//?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href ="admindashboard.php";
</script>