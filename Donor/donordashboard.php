<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donate4All Donor Dashboard</title>
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
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
          <div class="nano-content">
              <ul>
                  <div class="logo"><a href="index.html">
                      <img src="images/donate4all.png" alt="Logo" width="40%"/><span>Donate4All</span></a></div>
                  <li class="label">Main</li>
                  
                  <li><a href="donordashboard.html"><i class="ti-home"></i> Dashboard</a>
                  </li>
  
                  <li class="label">Donation</li>
                  <li><a class="sidebar-sub-toggle"><i class="ti-agenda"></i> Manage Donation <span
                              class="sidebar-collapse-icon ti-angle-down"></span></a>
                      <ul>
                          <li><a href="#"><i class="ti-eye"></i>Donation History</a></li>
                          <li><a href="approverequest.html"><i class="ti-check-box"></i>Approved Donation</a></li>
                      </ul>
                  </li>
                  <li><a href="#"><i class="ti-money"></i> View Donation </a></li>
              </ul>  
          </div>
      </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <div class="float-right">
              <div class="dropdown dib">
                <div class="header-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <span class="user-avatar">Shahril <i class="ti-angle-down f-s-10"></i></span>
                </div>
                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                  <ul>
                    <li class="dropdown-item">
                      <a href="donorprofile.html">
                        <i class="ti-user"></i>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="dropdown-item">
                      <a href="../index.html">
                        <i class="ti-power-off"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Hello, Donor <span>Welcome Here</span></h1>
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
                      <div class="stat-digit">1,012</div>
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
                      <div class="stat-digit">2,781</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2022 © Donate4All</p>
                </div>
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