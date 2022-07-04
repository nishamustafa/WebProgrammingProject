<?php
session_start();
include("include/config.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$username=mysqli_real_escape_string($con,$_POST['user_name']);
$password=mysqli_real_escape_string($con,$_POST['password']);

if($username !="" && $password !="")
{
    $query="SELECT count(*) as cntUser from donor WHERE Username='".$username."'and password='".$password."'";
    $result=mysqli_query($con,$query);
    $num=mysqli_fetch_array($result);

    $count=$num['cntUser'];

    if ($count>0){
        $_SESSION['username'] = $username;
        header('Location: home.php');
    }else{
        echo "Invalid username and password";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Donate4All Donor Login</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="../index.html"><span>Donate4All</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Donor Login</h4>
                            <form action="login.php" name="login" id="login" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="user_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            </form>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="../page-register.php"> Sign Up Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>