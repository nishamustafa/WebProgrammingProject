<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $desc=$_POST['description'];
    $goal=$_POST['goal'];
    $rimage=$_FILES["uploadfile"]["name"];
    $tempimage=$_FILES["uploadfile"]["tmp_name"];
    $folder="../requestIMG/" . $rimage;
    $donorID=$_SESSION['id'];
    $status=0;
    $query=mysqli_query($con,"insert into request(recipient_fk,title,Description,goal,requestIMG,Status) values('$donorID','$title','$desc','$goal','$rimage','$status')");
    if($query)
    {
        echo "<script>alert('Request Success. Wait for status');</script>";
        move_uploaded_file($tempimage, $folder);
    }else{
        echo "<script>alert('Request error, try again.');</script>";
        echo "<script>window.location.href ='requestdonation.php'</script>";
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

    <title>Donate4All-RequestDonation</title>

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

    <!-- start form -->
    <br>
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="request-content">
                        <div class="request-form">
                            <h4>Request Form</h4>
                            <br>
                            <div class="border border-dark rounded mb-5 px-4 py-5">
                                <form name="request" id="request" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Goal</label>
                                        <input type="text" class="form-control" placeholder="Goal" name="goal" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image Upload</label>
                                        <input type="file" class="form-control" placeholder="Upload File" name="uploadfile" required>
                                    </div>
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                </form>
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
                <a href="home.php">Donate4All</a>
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