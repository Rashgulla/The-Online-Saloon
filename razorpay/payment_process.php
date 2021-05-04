<?php
session_start();

include('../Home/connect.php');
$aid=$_POST['aid'];
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
    $sql="SELECT aid FROM payment WHERE payment_id='$payment_id'";
    $results=mysqli_query($conn,$sql);
    if($results){
        while($row=mysqli_fetch_array($results)){
            $aid=$row['aid'];
            mysqli_query($conn,"update appointments set status='payment_done' where id='$aid'");
        }
    }
    

}
?>