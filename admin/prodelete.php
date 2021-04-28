<?php
include('../Home/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE FROM products WHERE id='$newid'";

if (mysqli_query($conn,$sql)) {
    header('location: productshow.php');
} else {
    echo "<script> alert('Product Not Deleted');
    window.location.href='productshow.php';
    </script>";
}



?>