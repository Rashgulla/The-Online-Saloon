<?php
    //Database connection
    $host="localhost";
    $user="root";
    $password="";
    $dbname="theonlinesalon";
    
    $conn = mysqli_connect($host,$user,$password,$dbname);
    if(!$conn){
        die("NO connection :".mysqli_connect_error());
    }
?>