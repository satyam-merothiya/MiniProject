<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</head>
<body>
<?php
require 'header_home.php';
?>
<div class="container" style="margin-top: 50px">
    <div class="col-lg-5 col-lg-offset-3">
        <h3>Change Password</h3>
        <form method="POST" action="settings_script.php">
            <input type="text" name="Old_password" placeholder="Old Password" class="form-control form-group">
            <input type="text" name="New_password" placeholder="New Password" class="form-control form-group">
            <input type="text" name="Retyped_password" placeholder="Re-type New Password" class="form-control form-group">
            <button class="btn btn-block btn-default btn-primary" style="width: 30%">Change</button>
        </form>
    </div>
</div>
</body>
<?php
require 'footer.php';
?>
