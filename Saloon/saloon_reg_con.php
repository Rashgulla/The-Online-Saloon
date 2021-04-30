<?php
    
    include('../Home/connect.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mobile = $_POST['mobile_no'];
    $address = $_POST['address'];

    $cimage = $_FILES['pic']['name'];
	$cimage_tmp = $_FILES['picture']['tmp_name'];
    move_uploaded_file($cimage_tmp,"../saloon_admin/uploads/$cimage");
    
    if($password==$confirm_password)
    {
        $sql = "INSERT INTO saloon(email,username,password,mobile_no,picture,address) values('$email','$username','$password','$mobile','$cimage','$address')";
        if (mysqli_query($conn,$sql)) {
            header('location: index.php');
        } 
        
    }
    else
    {
        echo "<script> alert('password did not match.');
        window.location.href='index.php';
        </script>";
    }
