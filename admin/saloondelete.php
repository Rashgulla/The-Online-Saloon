<?php
include('../Home/connect.php');
$newid=$_GET['d_id'];

$sql="DELETE FROM saloon WHERE id='$newid'";

if (mysqli_query($conn,$sql)) {
    echo "<script> alert('Saloon Deleted');
    window.location.href='saloonshow.php';
    </script>";
} else {
    echo "<script> alert('Product Not Deleted');
    window.location.href='saloonshow.php';
    </script>";
}



?>