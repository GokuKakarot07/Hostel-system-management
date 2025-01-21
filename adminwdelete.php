<?php
include 'app/connect.php';

 try {
$query = "delete from ward where wid = $_POST[wid]";
$query_run = mysqli_query($conn,$query);

if(!$query) {
          $error = "data doesnot exist";
          throw new Exception($error);
      }   
}
catch (Exception $e) {
      echo $e->getMessage();
      echo "<script type='text/javascript'>";
      alert("error");
      echo "window.location.href ='admindashboard.php';";
  echo "</script>"; 
  }

  ?>
<script type="text/javascript">
    alert("Deleted Successfully");
    window.location.href ="admindashboard.php";
</script>