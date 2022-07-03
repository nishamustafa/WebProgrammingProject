<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$userName=$_POST['user_name'];
$fullName=$_POST['full_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone_num'];
$password=md5($_POST['password']);
$group=$_POST['registrationGroup'];
if($group=="Donor")
{
    $query=mysqli_query($con,"insert into donor(username,password,name,gender,age,email,phoneNumber) values('$userName','$password','$fullName','$gender','$age','$email','$phone')");
}
else if($group=="Recipient")
{
    $query=mysqli_query($con,"insert into recipient(username,password,name,gender,age,email,phoneNumber) values('$userName','$password','$fullName','$gender','$age','$email','$phone')");
}
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:index.html');
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Donate4All Registration</title>

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
                            <a href="index.html"><span>Donate4All</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Registration</h4>
                            <form name="registration" id="registration" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="user_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="Fullname" name="full_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="number" class="form-control" placeholder="Age" name="age" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="male">
                                        <label class="from-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="female">
                                        <label class="from-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="other">
                                        <label class="from-check-label" for="other">Other</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone :</label>  
                                    <input type="text" class="form-control" placeholder="Phone" size="10" name="phone_num" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" placeholder="Repeat Password" name="again_password" required>
                                </div>
                                <div class="form-group">
                                    <label>Register as</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="registrationGroup" value="Donor">
                                        <label class="from-check-label" for="Donor">Donor</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="registrationGroup" value="Recipient">
                                        <label class="from-check-label" for="option1">Recipient</label>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Agree the terms and policy 
									</label>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>