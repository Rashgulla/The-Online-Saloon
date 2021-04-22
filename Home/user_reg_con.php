<?php

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    $hnumber = $_POST['hnumber'];
    $society = $_POST['society'];
    $landmark = $_POST['landmark'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];

    //Database connection
    $host="localhost";
    $user="root";
    $password="";
    $dbname="theonlinesalon";
    
    $conn = mysqli_connect($host,$user,$password,$dbname);
    if(!$conn){
        die("NO connection :".mysqli_connect_error());
    }


    $sql = "INSERT INTO `user_registration` (`email`, `username`, `password`, `cpassword`, `mobile`, `hnumber`, `society`, `landmark`, `city`, `pin`) 
    VALUES ('$email', '$username',' $password', '$cpassword', '$mobile', '$hnumber', '$society', '$landmark', '$city', '$pin')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>window.open('C:\xampp\htdocs\The-Online-Saloon\user\user_home.php','_self')</script>";
    }
    else{
        echo "account not created".mysqli_error($conn);
    }
?>