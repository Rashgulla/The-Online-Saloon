<?php

include('../Home/connect.php');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$mobile = $_POST['mobile_no'];
$address = $_POST['address'];

$cimage = $_FILES['pic']['name'];
$cimage_tmp = $_FILES['pic']['tmp_name'];
move_uploaded_file($cimage_tmp, "../saloon_admin/uploads/$cimage");

$qr = $_FILES['qr']['name'];
$qr_tmp = $_FILES['qr']['tmp_name'];
move_uploaded_file($qr_tmp, "../saloon_admin/qr/$qr");

if ($password == $confirm_password) {
    $sql = "INSERT INTO saloon(email,username,password,mobile_no,picture,address,QR) values('$email','$username','$password','$mobile','$cimage','$address','$qr')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('account created.');
        window.location.href='../saloon_admin/index.php';
        </script>";
    }
} else {
    echo "<script> alert('password did not match.');
        window.location.href='index.php';
        </script>";
}
