<?php
require 'common.php';
session_start();
?>

<?php




$enroll = $_POST['Eno'];

$select_query = "SELECT * FROM students where enroll_id = '$enroll'";

$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

$row = mysqli_fetch_array($select_query_result); 
$username = $row["first_name"] . " " . $row["last_name"];
$status = $row['status'];
$bday = $row['b_day'];
$gen = $row['gender'];
$fname = $row['father_name'];
$mname = $row['mother_name'];
$add = $row['address'];
$state = $row['state'];
$pincode = $row['pin_code'];
$tel = $row['telephone'];
$phone = $row['phone'];
$date = $row['Reg_Time'];
$id = $row['id'];
$email = $row['email_id'];
$first_name = $row["first_name"];
$last_name = $row["last_name"];

$select = "SELECT * FROM academic_details where enroll_id = '$enroll'";
$result2 = mysqli_query($con,$select) or die(mysqli_error($con));
$r = mysqli_fetch_array($result2);

$admyear = $r['adm_year'];
$passyear = $r['pass_year'];
$branch = $r['Branch'];
$spec = $r['spec'];
$comp1 = $r['company1'];
$comp2 = $r['company2'];
$comp3 = $r['company3'];

$result3 = mysqli_query($con,"select count(1) FROM students");
$ro = mysqli_fetch_array($result3);

$total = $ro[0];


//    $row = mysqli_fetch_array($select_query_result);
//     echo "id: " . $row["first_name"]. " ";
  echo $username;
  echo $status;
  echo $bday;
    $_SESSION['enroll_id'] = $enroll;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['username'] = $username;
   $_SESSION['status'] = $status;
  $_SESSION['b_day'] = $bday;
  $_SESSION['gen'] = $gen;
  $_SESSION['fname'] = $fname;
  $_SESSION['mname'] = $mname;
  $_SESSION['add'] = $add;
  $_SESSION['state'] = $state;
  $_SESSION['pincode'] = $pincode;
  $_SESSION['tel'] = $tel;
  $_SESSION['phone'] = $phone;
  $_SESSION['admyear'] = $admyear;
  $_SESSION['passyear'] = $passyear;
  $_SESSION['spec'] = $spec;
  $_SESSION['branch'] = $branch;
  $_SESSION['comp1'] = $comp1;
  $_SESSION['comp2'] = $comp2;
  $_SESSION['comp3'] = $comp3;
  $_SESSION['date'] = $date;
  $_SESSION['id'] = $total;
  $_SESSION['email'] = $email;
  // echo  $_SESSION['state'];


header('location: getdetails_update_backend.php');











?>