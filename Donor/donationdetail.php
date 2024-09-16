<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['donate'])) {
  $donorID = $_SESSION['id'];
  $pid = intval($_GET['pid']);
  //$query = mysqli_query($con, "select * from request where requestID='$pid'");
  //$num=mysqli_fetch_array($query);
  //$reqID=$num['requestID'];
  $amount = $_POST['radio-group'];
  $status = 1;

  $query = mysqli_query($con, "insert into donation(donor_fk,request_fk,Amount,Status) values ('$donorID','$pid','$amount','$status')");
  if ($query) {
    echo "<script>alert('You have successfully donated, returning to main page.');</script>";
    echo "<script>window.location.href ='donationpage.php'</script>";
  } else {
    echo "<script>alert('Error in donating, try again.');</script>";
    echo "<script>window.location.href ='donationdetail.php?pid=$pid'</script>";
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

  <title>Donate4All-Donation Page</title>

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

  <!-- information section -->
  <section class="donation_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Make a Donation</h2>
      </div>
      <br>
      <br>
      <div class="row justify-content-center">
        <?php
        $pid = intval($_GET['pid']);
        $query = mysqli_query($con, "select * from request where requestID='$pid'");
        $cnt = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="donation">
              <div class="donation_pic">
                <img src="../requestIMG/<?php echo $row['requestIMG']; ?>" alt="donationpic" width="240" height="160" style="margin:0px 50px">
              </div>
              <div class="donation_content">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['Description']; ?></p>
                <p>Goal : RM<?php echo $row['goal']; ?>.</p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- donation section -->
  <section class="donation_section layout_padding">
    <div class="container">
      <div class="make_donation_area section_padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section_title text-center mb-55">
                <h3><span>Make a Donation</span></h3>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <form id=donation_form class="donation_form" method="post">
                <div class="row align-items-center">
                  <div class="col-md-8" style="margin: 0 auto;">
                    <div class="single_amount">
                      <div class="fixed_donat d-flex">
                        <div class="select_prise">
                          <h4>Enter Amount:</h4>
                        </div>
                        <div class="single_doonate">
                          <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1" name="radio-group">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="donate_now_btn text-center">
                      <button type="submit" id="donate" name="donate" class="boxed-btn4">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <!-- footer section -->
  <div class="footer_bg">
    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="text-center footer_text">
        <p>
          © 2022 All Rights Reserved By
          <a href="home.php">Donate4All</a>
        </p>
      </div>
    </section>
    <!-- footer section -->
  </div>
  <!-- footer section -->

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