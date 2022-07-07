<?php
include 'include/config.php';
$query="select donorID,UserName,Name,Gender,Age,Email,PhoneNumber from donor";
$result=mysqli_query($con,$query);
?>