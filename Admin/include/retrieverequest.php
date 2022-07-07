<?php
include 'include/config.php';
$query="select requestID,recipient_fk,title,Description,goal,Status,RequestDate from request";
$result=mysqli_query($con,$query);
?>