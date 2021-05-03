<?php
session_start();

include('../Home/connect.php');

if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    $aid=$_POST['aid'];
    mysqli_query($conn,"insert into payment(name,amount,payment_status,added_on,aid) values('$name','$amt','$payment_status','$added_on','$aid')");
    $_SESSION['OID']=mysqli_insert_id($conn);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];

    mysqli_query($conn,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
    //mysqli_query($conn,"update appointments set payment_status='complete' where id='$aid'");

}
?>