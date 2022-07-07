<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
    $pid = intval($_GET['pid']);
    $title=$_POST['title'];
    $description=$_POST['description'];
    $goal=$_POST['goal'];
    $status=$_POST['status'];
    $query=mysqli_query($con,"update request set title='$title',description='$description',goal='$goal',status='$status' where requestID='$pid'");
    if($query)
    {
        echo "<script>alert('Successfully Updated');</script>";
        echo "<script>window.location.href='approverequest.php'</script>";
      } else {
          echo "<script>alert('Something went wrong. Please try again.');</script>";
          echo "<script>window.location.href='approverequest.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin View Donation</title>

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
  <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/lib/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- /# sidebar -->
  <?php include('include/sidebar.php'); ?>

  <!--Header-->
  <?php include('include/header.php'); ?>

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
                  <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Request</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
                  <h4>Edit Request</h4>
                  <div class="card-body">
                    <div class="basic-form">
                    <?php 
                    $pid = intval($_GET['pid']);
                    $sql=mysqli_query($con,"select * from request where requestID='$pid'");
                    $cnt = 1;
                            while($data=mysqli_fetch_array($sql)){
                            ?>
                      <form style="margin-top: 20px;" method="post">
                        <div class="form-group">
                          <p class="text m-b-15 f-s-17">
                            Title</p>
                          <input type="text" class="form-control input-default " name="title" value="<?php echo htmlentities($data['title']); ?>">
                        </div>
                        <div class="form-group">
                          <p class="text m-b-15 f-s-17">
                            Description</p>
                          <input type="text" class="form-control input-default " name="description" value="<?php echo htmlentities($data['Description']); ?>">
                        </div>
                        <div class="form-group">
                          <p class="text m-b-15 f-s-17">Goal
                          </p>
                          <input type="text" class="form-control input-default " name="goal" value="<?php echo htmlentities($data['goal']); ?>">
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status">
                            <option value="<?php echo htmlentities($data['status']); ?>"></option>
                            <option value="1">Approved</option>
                            <option value="0">Not Approved</option>
                          </select>
                        </div>
                        <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                      </form>
                      <?php }?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <?php include('include/footer.php'); ?>
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

  <!-- bootstrap -->

  <script src="assets/js/lib/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!-- scripit init-->
  <script src="assets/js/lib/data-table/datatables.min.js"></script>
  <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="assets/js/lib/data-table/jszip.min.js"></script>
  <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
  <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
  <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="assets/js/lib/data-table/datatables-init.js"></script>

  <script src="assets/js/lib/jquery/jquery.min.js"></script>
        <script src="assets/js/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/js/lib/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/lib/sb-admin-2.min.js"></script>
</body>

</html>