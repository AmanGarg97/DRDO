<?php
require 'common.php';
session_start();
?>
<?php

//$enroll = mysqli_real_escape_string( $con,$_POST['enroll']);
//$password = md5($_POST['pass']);
$enroll = $_POST['enroll'];
$password = $_POST['pass'];


$select_query = "SELECT * FROM  students where enroll_id = '$enroll' && password = '$password'";
$select_query2 = "SELECT first_name,last_name,status FROM students where enroll_id = '$enroll' ";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
$result = mysqli_query($con,$select_query2);
$row = mysqli_fetch_array($result);
$username = $row["first_name"] . " " . $row["last_name"];
$status = $row['status'];

if($total_rows_fetched == 0)
{
    echo "Incorrect Details";
}
else
{
//    $row = mysqli_fetch_array($select_query_result);
//     echo "id: " . $row["first_name"]. " ";
  echo $username;

    $_SESSION['enroll_id'] = $enroll;
    $_SESSION['username'] = $username;
  $_SESSION['status'] = $status;
    header('location: login_submit.php');
}



?>


