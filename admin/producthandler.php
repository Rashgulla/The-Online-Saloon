<?php
session_start();

include('../Home/connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$target = "../uploads";
$file_path = $target.basename($_FILES['picture']['name']);
$file_name = $_FILES['picture']['name'];
$file_tmp = $_FILES['picture']['tmp_name'];
$file_store = "../uploads".$file_name;

move_uploaded_file($file_tmp, $file_store);




$sql = "INSERT INTO products(name,price,picture,description) values('$name','$price','$file_path','$description')";
$conn->query($sql);
?>