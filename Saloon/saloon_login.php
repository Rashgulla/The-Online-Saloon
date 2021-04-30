<?php
session_start();

if(isset($_POST['login'])){

    include('../Home/connect.php');

    
    $email = $_POST['email'];   
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM saloon WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    $final=$result->fetch_assoc();



    if($email==$final['email'] AND $password==$final['password'])
    {
        
        $_SESSION['email'] = $final['email'];
 
        header('location: ../saloon_admin/index.php');
    }
    else
    {
        echo "<script> alert('Invalid credentials');
        window.location.href='index.php';
        </script>";
        echo "invalid";
    }
}

?>