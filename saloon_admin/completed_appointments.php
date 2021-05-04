<?php
session_start();

if(isset($_POST['status_update'])){
    include('../Home/connect.php');
        $sal_id=$_SESSION['id'];
        $userid=$final['uid'];
        $sql="UPDATE appointments SET status='completed' WHERE sal_id='$sal_id' and uid='$userid'";
        $results=mysqli_query($conn,$sql);
    }
?>