<?php
session_start();
include('connect.php');
if (isset($_POST['buynow'])) {
    $uid = $_SESSION['id'];
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    //$sid = $_POST['sid'];
    $uname = $_POST['name'];
    $umail = $_POST['email'];
    $umobile = $_POST['mobile_no'];
    $address = $_POST['address'];
    $time = $_POST['time'];
    $date = $_POST['date'];


    $sql = "INSERT INTO orders(uid,pid,uname,pname,address,status,email,mobile_no,time,date) VALUES('$uid','$pid','$uname','$pname','$address','pending','$umail','$umobile','$time','$date')";
    $results = mysqli_query($conn, $sql);
    
}
?>


<html>

<body>


    <form>
        <input id="order_id" type="text" name="order_id" value="<?php
                                                                $query3 = "SELECT id FROM orders WHERE uid='$uid' && pid='$pid' && date='$date' && time='$time'";
                                                                $run1 = mysqli_query($conn, $query3);
                                                                if ($run1) {
                                                                    $rc1 = mysqli_num_rows($run1);
                                                                    if ($rc1 > 0) {
                                                                        while ($row1 = mysqli_fetch_array($run1)) {
                                                                            $oid = $row1['id'];
                                                                            echo $oid;
                                                                        }
                                                                    } else {
                                                                        echo "not executed in";
                                                                    }
                                                                }

                                                                ?>" hidden>
        <input type="textbox" name="uname" value="<?php echo $uname ?>" id="uname" placeholder="Enter your name" readonly><br /><br />
        <input type="textbox" name="pname" value="<?php echo $pname ?>" id="pname" placeholder="Enter your name" readonly><br /><br />
        <input type="textbox" name="amt" value="
    <?php
    $sql2 = "SELECT price FROM products WHERE id='$pid'";
    $query = mysqli_query($conn, $sql2);
    if ($query) {
        while ($row = mysqli_fetch_array($query)) {
            $p = $row['price'];
            echo $p;
        }
    }
    ?>
    
    " id="amt" placeholder="Enter amt" readonly /><br /><br />
        <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()" />
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function pay_now() {
            var order_id = jQuery('#order_id').val();
            var uname = jQuery('#uname').val();
            var pname = jQuery('#pname').val();
            var amt = jQuery('#amt').val();

            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + amt + "&uname=" + uname + "&pname=" + pname + "&order_id=" + order_id,
                success: function(result) {
                    var options = {
                        "key": "rzp_test_PTzJsjOtxrLKfM",
                        "amount": amt * 100,
                        "currency": "INR",
                        "name": "The Online Salon",
                        "description": "Test Transaction",
                        "image": "../../images/logo.jpeg",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
                                    window.location.href = "../../user/myorders.php";
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });


        }
    </script>
</body>

</html>