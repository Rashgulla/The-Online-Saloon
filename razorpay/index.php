<?php
session_start();
include('../Home/connect.php');
if (isset($_POST['confirm'])) {
    $uid = $_SESSION['id'];
    $sal_id = $_POST['sal_id'];
    //$sid = $_POST['sid'];
    $uname = $_POST['name'];
    $umail = $_POST['email'];
    $umobile = $_POST['mobile_no'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];

    $sid = substr($service, 0, 1);
    $sname = substr($service, 1);

    $query2 = "SELECT date,time FROM appointments WHERE date='$date' && time='$time' && sal_id='$sal_id'";
    $run = mysqli_query($conn, $query2);
    if ($run) {
        $rc = mysqli_num_rows($run);
        if ($rc > 0) {
            echo "<script>alert('Appointment already booked..Pls select time after 15-20 minutes')</script>";
            echo "<script>window.open('../user/saloonpage.php','_self')</script>";
        }
        else {
            $sql = "INSERT INTO appointments(uid,sal_id,sid,uname,email,mobile_no,date,time,sname,status) values('$uid','$sal_id','$sid','$uname','$umail','$umobile','$date','$time','$sname','payment_pending')";
            $results = mysqli_query($conn, $sql);
    
            if ($results) {
                echo  "<script>alert('appointment booked')</script>";
            }
            else{
                echo mysqli_error($conn);
            }
        }
    } 
}
?>


<html>

<body>


    <form>
    <input id="aid" type="text" name="aid" value="<?php 
            $query3 = "SELECT id FROM appointments WHERE date='$date' && time='$time' && sal_id='$sal_id'";
            $run1 = mysqli_query($conn, $query3);
            if ($run1) {
                $rc1 = mysqli_num_rows($run1);
                if ($rc1 > 0) {
                    while($row1=mysqli_fetch_array($run1)){
                        $aid=$row1['id'];
                        echo $aid;
                    }
                } 
                else{
                    echo "not executed in";
                }
        
            }
        
        ?>" hidden>
        <input type="textbox" name="name" value="<?php echo $uname ?>" id="name" placeholder="Enter your name" readonly><br /><br />
        <input type="textbox" name="amt" value="
    <?php
    $sql2 = "SELECT price FROM services WHERE sid='$sid'";
    $query = mysqli_query($conn, $sql2);
    if ($query) {
        while ($row = mysqli_fetch_array($query)) {
            $p = $row['price'];
            echo ($p + ($p * 0.10));
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
            var aid=jQuery('#aid').val();
            var name = jQuery('#name').val();
            var amt = jQuery('#amt').val();

            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + amt + "&name=" + name + "&aid=" + aid,
                success: function(result) {
                    var options = {
                        "key": "rzp_test_PTzJsjOtxrLKfM",
                        "amount": amt * 100,
                        "currency": "INR",
                        "name": "The Online Salon",
                        "description": "Test Transaction",
                        "image": "../images/logo.jpeg",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
                                      window.location.href = "../user/myappointments.php";
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