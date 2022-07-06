<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
$userdata=check_login();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Donate4All-DonationListing</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <?php include('include/mainheader.php');?>
      <!-- end header section -->
    </div>

      <!-- information section -->
<section class="welcome_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>Food Supply For Frontliners</h2>
        </div>
        <div class="layout_padding2">
          <div class="img-box">
            <img src="images/welcome.png" alt="" />
          </div>
          <div class="detail-box">
            <p>
              dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
              ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- donation section -->
    <section class="donation_section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h2>Donate Food Supplies</h2>
            </div>
            <br>
            <br>
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
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Select Amount:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="#" class="boxed-btn4">Donate Now</a>
                    </div>
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
              <a href="https://html.design/">Donate4All</a>
          </p>
      </div>
      </section>
      <!-- footer section -->
    </div>
    <!-- footer section -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>