<?php
include('adminpartials/head.php');


session_start();

if (isset($_POST['login'])) {

    include('../Home/connect.php');

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $results = $conn->query($sql);
    $final = $results->fetch_assoc();



    if ($email == $final['email'] and $password == $final['password']) {
        $_SESSION['email'] = $final['email'];
        $_SESSION['password'] = $final['password'];
        header('location: adminindex.php');
    } else {
        echo "<script> alert('Invalid credentials');
        window.location.href='adminlogin.php';
        </script>";
    }
}


?>

