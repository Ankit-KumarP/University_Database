<!-- PHP -->
<?php
include_once "./include/config.php";
$Id = $_GET['Id'];
$query = "DELETE FROM info where ID = $Id";
$result = mysqli_query($connection,$query);
if($result){
    echo "<script> alert('Data Deleted Successfully')</script>"; 
    echo "<script> location.replace('preview.php') </script>";
}
else {
    echo $connection->errno;
}
?>