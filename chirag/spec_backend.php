<?php
require 'common.php';
session_start();

$spec = $_POST['spec'];
$enroll = $_SESSION['enroll_id'];


$query = "UPDATE `academic_details` SET `spec` = '$spec' WHERE `enroll_id` = '$enroll'";
 


//mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_query($con,$query))
{
  header('location:stud_profile.php');
}

else
{
  echo "Try Again! Some error occurred.";
}












?>

