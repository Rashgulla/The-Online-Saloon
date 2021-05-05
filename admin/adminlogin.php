<?php
session_start();
include('adminpartials/head.php');




if (isset($_POST['login'])) {

    include('../Home/connect.php');

    $email = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admins WHERE username='$email' AND password='$password'";
    $results = $conn->query($sql);
    $final = $results->fetch_assoc();



    if ($email == $final['username'] and $password == $final['password']) {
        $_SESSION['username'] = $final['username'];
        $_SESSION['password'] = $final['password'];
        echo "<script> alert('Logged In');
        window.location.href='adminindex.php';
        </script>";
    } else {
        echo "<script> alert('Invalid credentials');
        window.location.href='adminhome.php';
        </script>";
    }
}


?>

