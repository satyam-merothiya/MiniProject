<!DOCTYPE html>
<html>
<head></head>
<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['id'];
$old_password=mysqli_real_escape_string($con,$_POST['Old_password']);
$new_password=mysqli_real_escape_string($con,$_POST['New_password']);
$retyped_password=mysqli_real_escape_string($con,$_POST['Retyped_password']);
$old_password=md5($old_password);
$new_password=md5($new_password);
$retyped_password=md5($retyped_password);
if(!strlen($retyped_password)==strlen($new_password))
{
?>
<body>
<div style="margin-top:200px">
    Please Re-type the password correctly
</div>
<?php
}
?>
<div style="margin-top: 100px">
</div>
<?php
$select_query="SELECT * FROM users where id='$user_id'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
$email=$_SESSION['email'];
if($old_password==$row['password'])
{
    $update_query="UPDATE store.users SET users.password= '$new_password' WHERE users.email='$email'";
    $update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
    echo "Password Updated Successfully";
    echo '<h4>Click on the button to go to home page</h4>';
    echo '<a href="home.php" ><button class="btn btn-primary">Click Here</button></a>';
}
else {
    ?>
    <div style="margin-top: 100px">
        Incorrect Password
    </div>
    <?php
    header('location:settings.php');
}
?>
</body>
</html>
