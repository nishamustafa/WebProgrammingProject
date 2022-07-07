<?php
include 'include/config.php';
$query="select donationID,Amount,Status,DonationDate from donation";
$result=mysqli_query($con,$query);
?>