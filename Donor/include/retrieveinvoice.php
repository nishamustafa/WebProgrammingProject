<?php
include 'include/config.php';
$query="select donationID,request_fk,Amount,DonationDate from donation";
$result=mysqli_query($con,$query);
?>