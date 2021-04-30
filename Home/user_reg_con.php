<?php
    
    include('connect.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mobile = $_POST['mobile_no'];
    $address = $_POST['address'];

    if($password==$confirm_password)
    {
        $sql = "INSERT INTO users(email,username,password,mobile_no,address) values('$email','$username','$password','$mobile','$address')";
        $conn->query($sql);
       /* echo "<script> alert('account created.');
        window.location.href='../Home/index.php';
        </script>";*/
        header('location: index.php');
        
    }
    else
    {
        echo "<script> alert('password did not match.');
        window.location.href='index.php';
        </script>";
    }


?>








