<?php
include('adminpartials/head.php');
?>

<div class="row">
    <div class="col-sm-4">

    </div>

    <div class="col-sm-4">
        <h3>Admin Login</h3>
        <form class="form-horizontal" action="loginhandler.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-sm-4">

    </div>
</div>