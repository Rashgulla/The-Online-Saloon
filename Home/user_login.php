<?php
session_start();

if(isset($_POST['login'])){

    include('connect.php');

    $username = $_POST['username'];
    $email = $_POST['email'];   
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    $final=$result->fetch_assoc();



    if($email==$final['email'] AND $password==$final['password'])
    {
        $_SESSION['username'] = $final['username'];
        $_SESSION['email'] = $final['email'];
        $_SESSION['password'] = $final['password'];
        header('location: ../user/user_home.php');
    }
    else
    {
        echo "<script> alert('Invalid credentials');
        window.location.href='../Home/index.php';
        </script>";
        
    }
}

?>