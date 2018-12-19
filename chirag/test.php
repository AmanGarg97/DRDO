<?php
require 'common.php';
session_start();

if(isset($_POST['submit'])){

$enroll = $_POST['enroll'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
//$dob = $_POST['bdate'];
//$gen =$_POST['gen'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$add = $_POST['add'];
$state = $_POST['city'];
$pin = $_POST['pin'];
$tel = $_POST['telno'];
$phone = $_POST['phone'];
$email = $_POST['youremail'];
$adyr = $_POST['adm'];
$psyr = $_POST['pass'];
$branch = $_POST['branch'];  
  
}


$user_registration_query1 = "insert into students(first_name,last_name,enroll_id,father_name,mother_name,address,state,pin_code,phone,email_id,telephone) values('$firstname' , '$lastname' , '$enroll' ,  '$fname' , '$mname' , '$add' , '$state' , '$pin' , '$phone' , '$email' , '$tel')" or
die($user_registration_query1);


$user_registration_query2 = "insert into academic_details(adm_year,pass_year,Branch,enroll_id) values('$adyr' , '$psyr' , '$branch' , '$enroll')" or
die($user_registration_query2);





if(mysqli_query($con,$user_registration_query1) && mysqli_query($con,$user_registration_query2)){
  header('location:after_login_admin.php');
} 
else
{
  echo "Fill The Form Correctly or Contact Technical Support.";
}

$select = "SELECT * FROM students where enroll_id = '$enroll'";
$result2 = mysqli_query($con,$select) or die(mysqli_error($con));
$r = mysqli_fetch_array($result2);

$id = $r['id'];
$_SESSION['id'] = $id;





?>