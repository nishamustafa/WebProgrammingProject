<?php
include 'include/config.php';
$query="select donationID,Amount,Status,DonationDate from donation where donor_fk='". $_SESSION['id'] ."'";
$result=mysqli_query($con,$query);
?>