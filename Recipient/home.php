<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
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

    <title>Donate4All-MainPage</title>

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

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <?php include('include/mainheader.php');?>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            >
              01
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
              02
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
              03
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6">
                    <div class="slider_detail-box">
                      <h1>
                        Example <br />
                        Slider 1 <br />
                        Of Our Donation
                      </h1>
                      <p>
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1"> Read More </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6">
                    <div class="slider_detail-box">
                      <h1>
                        Example <br />
                        Slider 2 <br />
                        Of Our Donation
                      </h1>
                      <p>
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1"> Read More </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6">
                    <div class="slider_detail-box">
                      <h1>
                        Example <br />
                        Slider 3 <br />
                        Of Our Donation
                      </h1>
                      <p>
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1"> Read More </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-container">
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- welcome section -->
    <?php include('include/mainwelcome.php');?>
    <!-- end welcome section -->

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
