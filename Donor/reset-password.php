<?php
session_start();
include("include/config.php");
if(isset($_POST['change']))
{
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$newpassword=md5($_POST['password']);
$query=mysqli_query($con,"update donor set password='$newpassword' where Username='$username' and email='$email'");
if($query){
    echo "<script>alert('Password successfully changed.');</script>";
    echo "<script>window.location.href ='../index.html'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Donate4All Password Reset</title>

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

    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.again_password.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.again_password.focus();
                return false;
            }
            return true;
        }
    </script>
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
                            <h4>Recipient Password Recovery</h4>
                            <form name="reset" id="reset" method="post" onSubmit="return valid();">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Reenter New Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="again_password" required>
                                </div>
                                <button type="change" id="change" name="change" class="btn btn-primary btn-flat m-b-30 m-t-30">Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>