<?php
session_start();

include('connect.php');
//$oid=$_POST['order_id'];
if(isset($_POST['amt']) && isset($_POST['uname']) && isset($_POST['pname'])){
    $amt=$_POST['amt'];
    $uname=$_POST['uname'];
    $pname=$_POST['pname'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    $oid=$_POST['order_id'];
    echo $oid;
   $sql2="INSERT INTO product_payment(order_id,name,amount,added_on,payment_status) VALUES('$oid','$uname','$amt','$added_on','$payment_status')";
    mysqli_query($conn,$sql2);
    $_SESSION['OID']=mysqli_insert_id($conn);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];

    mysqli_query($conn,"update product_payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
    $sql="SELECT order_id FROM product_payment WHERE payment_id='$payment_id'";
    $results=mysqli_query($conn,$sql);
    if($results){
        while($row=mysqli_fetch_array($results)){
            $oid=$row['order_id'];
            mysqli_query($conn,"update orders set status='payment_done' where id='$oid'");
        }
    }
    

}
?>