<?php
include 'include/config.php';
$query="select requestID,title,Status,requestDate from request where recipient_fk='". $_SESSION['id'] ."'";
$result=mysqli_query($con,$query);
?>