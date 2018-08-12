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
$select_query2 = "SELECT * FROM students where enroll_id = '$enroll' ";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
$result = mysqli_query($con,$select_query2);
$row = mysqli_fetch_array($result);
$username = $row["first_name"] . " " . $row["last_name"];
$status = $row['status'];
$bday = $row['b_day'];
$gen = $row['gender'];
$fname = $row['father_name'];
$mname = $row['mother_name'];
$add = $row['address'];
$tel = $row['telephone'];
$phone = $row['phone'];
$date = $row['Reg_Time'];
$email = $row['email_id'];

$select = "SELECT * FROM academic_details where enroll_id = '$enroll'";
$result2 = mysqli_query($con,$select) or die(mysqli_error($con));
$r = mysqli_fetch_array($result2);

$admyear = $r['adm_year'];
$passyear = $r['pass_year'];
$branch = $r['Branch'];
$spec = $r['spec'];
$comp = $r['company1'];


if($total_rows_fetched == 0)
{
    echo "Incorrect Details";
}
else
{
//    $row = mysqli_fetch_array($select_query_result);
//     echo "id: " . $row["first_name"]. " ";
  echo $username;
  echo $status;
  echo $bday;
    $_SESSION['enroll_id'] = $enroll;
    $_SESSION['username'] = $username;
   $_SESSION['status'] = $status;
  $_SESSION['b_day'] = $bday;
  $_SESSION['gen'] = $gen;
  $_SESSION['fname'] = $fname;
  $_SESSION['mname'] = $mname;
  $_SESSION['add'] = $add;
  $_SESSION['tel'] = $tel;
  $_SESSION['phone'] = $phone;
  $_SESSION['admyear'] = $admyear;
  $_SESSION['passyear'] = $passyear;
  $_SESSION['spec'] = $spec;
  $_SESSION['branch'] = $branch;
  $_SESSION['comp1'] = $comp;
  $_SESSION['date'] = $date;
  $_SESSION['email'] = $email;
header('location: stud_profile.php');
}



?>


