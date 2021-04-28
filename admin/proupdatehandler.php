<?php
include('../Home/connect.php');
if(isset($_POST['update']))
{
    $newid=$_POST['form_id'];
    $newname=$_POST['name'];
    $newprice=$_POST['price'];
    $newdesc=$_POST['description'];

    
    $target = "../admin/uploads/";
    $file_path = $target.basename($_FILES['picture']['name']);
    $file_name = $_FILES['picture']['name'];
    $file_tmp = $_FILES['picture']['tmp_name'];
    $file_store = "../admin/uploads/".$file_name;

    move_uploaded_file($file_tmp, $file_store);


    $sql="UPDATE products SET name='$newname', price='$newprice', description='$newdesc', picture='$file_path' WHERE id='$newid'";

    if(mysqli_query($conn,$sql)){
        header('location: productshow.php');
    }
    else{
        header('location: adminindex.php');
    }



}

?>