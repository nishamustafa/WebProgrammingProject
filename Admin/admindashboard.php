<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donate4All Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff" />
    <!-- Retina iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="http://placehold.it/144.png/000/fff"
    />
    <!-- Retina iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="http://placehold.it/114.png/000/fff"
    />
    <!-- Standard iPad Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="http://placehold.it/72.png/000/fff"
    />
    <!-- Standard iPhone Touch Icon-->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="http://placehold.it/57.png/000/fff"
    />
    <!-- Styles -->
    <link
      href="assets/css/lib/calendar2/pignose.calendar.min.css"
      rel="stylesheet"
    />
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet" />
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet" />
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/helper.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>

  <?php include('include/sidebar.php');?>
    <!-- /# sidebar -->

    <!--Header-->
  <?php include('include/header.php');?>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, Admin <span>Welcome Here</span></h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-money color-success border-success"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total Donation</div>
                      <div class="stat-digit">
                      <?php $sql= mysqli_query($con,"SELECT SUM(Amount) AS value_sum FROM donation");
                        $row = mysqli_fetch_assoc($sql); 
                        $sum = $row['value_sum'];
{
?>
											RM<?php echo htmlentities($sum);  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total User</div>
                      <div class="stat-digit">
                      <?php $sql1= mysqli_query($con,"SELECT * FROM donor");
                            $sql2= mysqli_query($con,"SELECT * FROM recipient");
                            $num_rows1 = mysqli_num_rows($sql1);
                            $num_rows2 = mysqli_num_rows($sql2);
                            $rows1 = $num_rows1 + $num_rows2;
{
?>
											<?php echo htmlentities($rows1);  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-layout-grid2 color-pink border-pink"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total Request</div>
                      <div class="stat-digit">
                      <?php $sql3= mysqli_query($con,"SELECT * FROM request");
                        $row3 = mysqli_num_rows($sql3); 
{
?>
											<?php echo htmlentities($row3);  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-link color-danger border-danger"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Approved Donation</div>
                      <div class="stat-digit">
                      <?php $sql4= mysqli_query($con,"SELECT * FROM donation WHERE status='Approved'");
                        $row4 = mysqli_num_rows($sql4); 
{
?>
											<?php echo htmlentities($row4);  } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-primary">
                      <i class="ti-user"></i>
                    </div>
                    <div class="stat-content">
                      <div class="stat-digit">
                      <?php $sql5= mysqli_query($con,"SELECT * FROM donor");
                        $row5 = mysqli_num_rows($sql5); 
{
?>
											<?php echo htmlentities($row5);  } ?>
                      </div>
                      <div class="stat-text">Donor</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card p-0">
                  <div class="stat-widget-three">
                    <div class="stat-icon bg-success">
                      <i class="ti-user"></i>
                    </div>
                    <div class="stat-content">
                      <div class="stat-digit">
                      <?php $sql6= mysqli_query($con,"SELECT * FROM recipient");
                        $row6 = mysqli_num_rows($sql6); 
{
?>
											<?php echo htmlentities($row6);  } ?>
                      </div>
                      <div class="stat-text">Recipient</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <?php include('footer.php'); ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>

    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/dashboard2.js"></script>
  </body>
</html>
