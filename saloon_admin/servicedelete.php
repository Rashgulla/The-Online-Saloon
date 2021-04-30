<!--Delete-->
<?php
include('../Home/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE FROM services WHERE sid='$newid'";

if (mysqli_query($conn,$sql)) {
    echo "<script> alert('Service Deleted');
    window.location.href='serviceshow.php';
    </script>";
} else {
    echo "<script> alert('Service Not Deleted');
    window.location.href='serviceshow.php';
    </script>";
}



?>