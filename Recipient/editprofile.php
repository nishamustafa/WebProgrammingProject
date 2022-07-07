<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phonenum=$_POST['phonenum'];
    $query=mysqli_query($con,"update recipient set name='$name',gender='$gender',age='$age',email='$email',PhoneNumber='$phonenum' where recipientID='". $_SESSION['id'] ."'");
    if($query)
    {
        echo "<script>alert('Successfully Updated');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Donate4All-User Profile</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <?php include('include/mainheader.php'); ?>
        <!-- end header section -->
    </div>

    <!-- start profile -->
    <br>
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="profile-content">
                        <div class="request-form">
                            <?php $sql=mysqli_query($con,"select * from recipient where recipientID='".$_SESSION['id']."'");
                            while($data=mysqli_fetch_array($sql)){
                            ?>
                            <h4><?php echo htmlentities($data['Username'])?> 's Profile</h4>
                            
                            <br>
                            <div class="border border-dark rounded mb-5 px-4 py-5">
                                <form name="editprofile" id="editprofile" method="post" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="name"
                                        value="<?php echo htmlentities($data['Name']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name=gender class="form-control" required>
                                            <option value="<?php echo htmlentities($data['Gender']); ?>">
                                            <?php echo htmlentities($data['Gender']); ?>
                                            </option>
                                            <option value="male">
                                            Male
                                            </option>
                                            <option value="female">
                                            Female
                                            </option>
                                            <option value="other">
                                            Other
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" class="form-control" name="age"
                                        value="<?php echo htmlentities($data['Age']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                        value="<?php echo htmlentities($data['Email']); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phonenum"
                                        value="<?php echo htmlentities($data['PhoneNumber']); ?>" required>
                                    </div>
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Edit</button>
                                </form>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <!-- end form -->
    <br><br><br><br>
    <div class="footer_bg">
        <!-- footer section -->
        <section class="container-fluid footer_section">
            <p>
                © 2022 All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </section>
        <!-- footer section -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>