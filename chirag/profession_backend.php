<?php
require 'common.php';
session_start();

$comp1 = $_POST['comp1'];
$enroll = $_SESSION['enroll_id'];
$comp2 = $_POST['comp2'];


$query = "UPDATE `academic_details` SET `company1` = '$comp1' ,  `company2` = '$comp2' WHERE `enroll_id` = '$enroll'";
 


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

