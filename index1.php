<?php
require 'common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Mobifyy</title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<nav class="navbar  navbar-fixed-top">
    <div class="container my_navbar">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand black_color"><strong><em>Mobifyy</em></strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" >
            <li><a href="signup.php" target="_blank" class="black_color"><span class="glyphicon glyphicon-user"></span>Sign Up</a> </li>
            <li><a href=".modal" data-toggle="modal" class="black_color"><span class="glyphicon glyphicon-log-in">Login</span> </a> </li>
            <li><a href="about.php" target="_blank" class="black_color"><span class="glyphicon glyphicon-tasks"></span>About Us </a> </li>
            <li><a href="contact.php" target="_blank" class="black_color"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
        </ul>
        </div>
    </div>
</nav>
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
                        <form method="post" action="login.php">
                            <input type="text" placeholder="Email" name="email" class="form-control form-group " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  style="width: 100%" >
                            <input type="text" placeholder="Password" name="password" class="form-control form-group">
                            <input type="submit" value="Login" class="btn btn-primary" style="width:100px">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="forgot_password.php" target="_blank" style="text-decoration:none ; float: left">Forget Password?</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ===================================B O D Y=====================================================-->

<div class="container-fluid" style="margin-top: 60px">
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mobile 1
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS5Wf4_xUq89knIlcaYc82LgcmEPZ_wCUYehmW_TAwqvae3d-1t-kKvbwyE6l1eYONF6D4oGIik&usqp=CAc">
                </a>
                <div class="caption">
                    <p>Samsung Galaxy A50
                    Xenox 395t with 6gb RAM , Rs 250000/-
                    </p>
                </div>
                <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset-">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mobile 2
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="data:image/jpeg;base64,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">
                </a>
                <div class="caption">
                    <p>One Plus 6t
                        Snapdragron 550 with 8gb RAM , Rs 44999/-
                    </p>
                </div>
                <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mobile 3
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="data:image/jpeg;base64,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">
                </a>
                <div class="caption">
                    <p>Realme 6 Pro
                        Snapdragron 290d with 4gb RAM 120Hz refresh rate , Rs 29999/-
                    </p>
                </div>
                <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 4
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="data:image/jpeg;base64,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">
                    </a>
                    <div class="caption">
                        <p>Sony Xperia
                            Snapdragron 550 with 2gb RAM , Rs 12000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 5
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRsN5JmRsh8Z0WyRqwUefNeBn1Srp-T0QkY8C3XkFoemie9h89nKnLpgDAd&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>Realme 6 pro
                            Snapdragron 550 with 8gb RAM , Rs 19999/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 6
                </div>
                <div class="panel-body">
                    <a class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQyonYoJnwWdGVAA9HSoaKx8QL3ncxITbWsHEktxoOSjCJT_CZ1RXOJjnWRgQ&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>Apple iPhone 11 Pro Max
                            Snapdragron 650 with 12gb RAM , Rs 1250000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 7
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Wireless/OnePlus/may/may4/D14990043_BAU_WL_OnePlus_new_kv_Hexcard_180x220_5._SY250_CB433960525_.jpg">
                    </a>
                    <div class="caption">
                        <p>One Plus 8 Pro
                            Snapdragron 2000 Y with 24gb RAM , Rs 54999/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 8
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQgIsna9jmktvYNTbMwY74xaefxM0MEjgnbHy7PekxdwuBrR9RpauOy-ruYKQ&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>POCO F1
                            Poknox 3 with 8gb RAM , Rs 20000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 9
                </div>
                <div class="panel-body">
                    <a class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQlLft0fAOvvGcwPE9TsKTs7NuY_3MH3xRCoMcXt91jRtn-C9sAIleLsW70xByB9AdnvAQXOtp&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>Samsung Galaxy S20 ultra
                            Xenox 980 with 24gb RAM , Rs 100000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 10
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShQglCkwz23HAXYNAeDOfuAIjfjqlLaNBIOlPT5Lycz4-EKcC4dYt9AHoCbfrLgJmpcF85Wo4&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>Oppo Reno 3
                            Snapdragron 580 with 6gb RAM , Rs 15000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 11
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJCQNZv3UdJ6gFUZ74mZ2FCuaSObF4GIpNQYyqAFZb9stMEM46y6j5zWyb&usqp=CAc">
                    </a>
                    <div class="caption">
                        <p>Redmi Node K20 pro
                            Sanapdragon 450 with 8gb RAM , Rs 25000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mobile 12
                </div>
                <div class="panel-body">
                    <a class="thumbnail">
                        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Wireless/Huawei/QC/WL_HuaweiY9s_QuadCard_420x420._SY300_CB430773881_.jpg">
                    </a>
                    <div class="caption">
                        <p>Huawei Y9s
                            Snapdragon 580 with 4gb RAM , Rs 8000/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
<div class="footer" style="width: 100%;background-color: rgba(0,0,0,0.78)">
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
</body>
</html>

