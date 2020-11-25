<!DOCTYPE html>
<html>
<head>
    <title><?php echo "footer" ?></title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="container">
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" data-dismiss="modal" style="float: right" > <span class="glyphicon glyphicon-remove" ></span> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            Don't have an account? <a href="signup.php" style="text-decoration:none">Register</a>
                            <form>
                                <input type="text" placeholder="Email" name="email" class="form-control form-group " style="width: 100%" >
                                <input type="text" placeholder="Password" name="password" class="form-control form-group">
                                <input type="submit" value="Login" class="btn btn-primary" style="width:100px">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="settings.php" target="_blank" style="text-decoration:none ; float: left">Forget Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
    <div class="footer" style="width: 100%;background-color: rgba(3,3,3,0.85);position: fixed;bottom:0 ">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">Information</b></p>
                <a href="about.php" style="text-decoration:none;color:white" >About Us</a><br>
                <a href="contact.php" style="text-decoration:none;color:white" >Contact Us</a>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">My Account</b></p>
                <a href=".modal" data-toggle="modal"  style="text-decoration:none;color:white">Login </a><br>
                <a href="signup.php" style="text-decoration:none;color:white" >Signup</a>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <p style="font-size:18px "><b style="color: white ">Contact Us</b></p>
                <p style="color: white"> Contact: +91-80777-875-875</p>
            </div>
        </div>
    </div>
</footer>
</html>

