<?php
session_start();

include('../Home/connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

/*$target = "../admin/uploads/";
$file_path = $target.basename($_FILES['picture']['name']);
$file_name = $_FILES['picture']['name'];
$file_tmp = $_FILES['picture']['tmp_name'];
$file_store = "../admin/uploads/".$file_name;*/

//move_uploaded_file($file_tmp, $file_store);
    $cimage = $_FILES['picture']['name'];
	$cimage_tmp = $_FILES['picture']['tmp_name'];
    move_uploaded_file($cimage_tmp,"uploads/$cimage");


$sql = "INSERT INTO products(name,price,picture,description) values('$name','$price','$cimage','$description')";
//$conn->query($sql);
if (mysqli_query($conn,$sql)) {
    header('location: productshow.php');
} 
else {
    echo "<script> alert('Product Not Added');
    window.location.href='productshow.php';
    </script>";
}


?>