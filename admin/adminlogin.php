<?php
include('adminpartials/head.php');


session_start();

if (isset($_POST['login'])) {

    include('../Home/connect.php');

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    $final=$result->fetch_assoc();



    if ($email == $final['email'] and $password == $final['password']) {
        $_SESSION['email'] = $final['email'];
        $_SESSION['password'] = $final['password'];
        header('location: adminindex.php');
    } else {
        header('location: adminlogin.php');
    }
}


?>

<div class="row">
    <div class="col-sm-4">

    </div>

    <div class="col-sm-4">
        <h3>Admin Login</h3>
        <form class="form-horizontal" action="adminlogin.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>

    <div class="col-sm-4">

    </div>
</div>