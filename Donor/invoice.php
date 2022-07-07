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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Donation Invoice</title>

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

  <div class="unix-invoice">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div id="invoice" class="effect2 m-t-120">
            <div id="invoice-top">
              <div class="invoice-logo"></div>
              <div class="invoice-info">
                <h2>Amir Iskandar</h2>
                <p> amiris@donate4all.com <br> +601137429469
                </p>
              </div>
              <!--End Info-->
              <div class="title">
                <h4>Invoice #1</h4>
                <p>Issued: <?php echo htmlentities($data['DonationDate']); ?>
                </p>
              </div>
              <!--End Title-->
            </div>
            <!--End InvoiceTop-->



            <div id="invoice-mid">

              <div class="clientlogo"></div>
              <div class="invoice-info">
                <h2><?php echo htmlentities($data['Name']); ?></h2>
                <p><?php echo htmlentities($data['Email']); ?><br><?php echo htmlentities($data['PhoneNumber']); ?>
                  <br>
              </div>

              <div id="project">
                <h2>Invoice Description</h2>
                <p>Donation for <?php echo htmlentities($data['Description']); ?></p>
              </div>

            </div>
            <!--End Invoice Mid-->

            <div id="invoice-bot">

              <div id="invoice-table">
                <div class="table-responsive">
                  <table class="table">
                    <tr class="tabletitle">
                      <td class="table-item">
                        <h2>Donation ID</h2>
                      </td>
                      <td class="Hours">
                        <h2>Request ID</h2>
                      </td>
                      <td class="Rate">
                        <h2>Amount</h2>
                      </td>
                      <td class="subtotal">
                        <h2>Donation Date</h2>
                      </td>
                    </tr>

                    <tr class="service">
                      <?php include 'include/retrieveinvoice.php'; ?>

                      <?php if ($result->num_rows > 0) : ?>

                        <?php while ($array = mysqli_fetch_row($result)) : ?>

                    <tr>
                      <th scope="row"><?php echo $array[0]; ?></th>
                      <td><?php echo $array[1]; ?></td>
                      <td>RM<?php echo $array[2]; ?></td>
                      <td><?php echo $array[3]; ?></td>
                    </tr>
                  <?php endwhile; ?>
                <?php else : ?>
                  <tr>
                    <td colspan="3" rowspan="1" headers="">No Data Found</td>
                  </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                </tr>

                  </table>
                </div>
              </div>
              <!--End Table-->


              <div id="legalcopy">
                <p class="legal"><strong>Thank you for your business!</strong>
                </p>
              </div>

              <div class="text-center">
                        <a href="home.php">Back to Menu</a>
                    </div>
            </div>
            <!--End InvoiceBot-->
          </div>
          <!--End Invoice-->
        </div>
      </div>
    </div>
  </div>

</body>

</html>