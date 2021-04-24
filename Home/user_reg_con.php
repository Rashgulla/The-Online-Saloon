<?php
    session_start();
    include('connect.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password==$confirm_password)
    {
        $sql = "INSERT INTO user_registration(email,username,password) values('$email','$username','$password')";
        $conn->query($sql);
        echo "<script> alert('account created.');
        window.location.href='../user/user_home.php';
        </script>";
    }
    else
    {
        echo "<script> alert('password did not match.');
        window.location.href='../Home/index.php';
        </script>";
    }


?>








