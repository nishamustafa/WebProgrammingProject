<?php
session_start();
error_reporting(0);
include_once('include/config.php');
include_once('include/checklogin.php');
check_login();
if ($_GET['action'] == 'delete') {
    $pid = intval($_GET['pid']);
    $sql = mysqli_query($con,"delete from request where requestID='$pid'");
    
    echo '<script>alert("Request deleted")</script>';
    echo "<script>window.location.href='approverequest.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Approve Request</title>

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
    <link href="assets/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="assets/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
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
                                    <li class="breadcrumb-item active">Approve Request</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Request Information</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Request ID</th>
                                                        <th>Recipient ID</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Goal</th>
                                                        <th>Status</th>
                                                        <th>Request Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $query = mysqli_query($con, "select requestID,recipient_fk,title,Description,goal,Status,RequestDate from request");
                                                    $cnt = 1;
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>

                                                        <tr>

                                                            <td><?php echo $row['requestID']; ?></td>
                                                            <td><?php echo $row['recipient_fk']; ?></td>
                                                            <td><?php echo $row['title']; ?></td>
                                                            <td><?php echo $row['Description']; ?></td>
                                                            <td><?php echo $row['goal']; ?></td>
                                                            <td><?php 
                                                            if($row['Status']==1)
                                                            echo "Approved";
                                                            else
                                                            echo "Not Approved"; ?></td>
                                                            <td><?php echo $row['RequestDate']; ?></td>
                                                            <td>

                                                                <a href="editrequest.php?pid=<?php echo $row['requestID']; ?>"><i class="ti-pencil" style="color:blue"></i></a> |

                                                                <a href="approverequest.php?pid=<?php echo $row['requestID']; ?>&&action=delete" onclick="return confirm('Do you really want to delete this request?');"><i class="ti-trash" aria-hidden="true" style="color:red" title="Delete this request"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <?php include('include/footer.php'); ?>
                        </div>
                    </div>
                </div>
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
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
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

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="assets/js/lib/sb-admin-2.min.js"></script>
    <script src="assets/js/lib/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/js/lib/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/lib/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/lib/demo/datatables-demo.js"></script>

</body>

</html>