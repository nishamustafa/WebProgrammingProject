<?php
include 'include/config.php';
$query="select recipientID,UserName,Name,Gender,Age,Email,PhoneNumber from recipient";
$result=mysqli_query($con,$query);
?>