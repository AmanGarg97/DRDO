<?php
require 'common.php';
session_start();

$con = mysqli_connect("localhost" , "root" , "" ,"personal_details") or die(mysqli_error($con));
$email =mysqli_real_escape_string( $con,$_POST['youremail']);
$first_name = mysqli_real_escape_string( $con,$_POST['firstname']);
$last_name = mysqli_real_escape_string( $con,$_POST['lastname']);
$enroll_id = mysqli_real_escape_string( $con , $_POST['enroll']);
$fname = mysqli_real_escape_string( $con , $_POST['fname']);
$mname = mysqli_real_escape_string( $con , $_POST['mname']);
$add = mysqli_real_escape_string( $con , $_POST['add']);
$city = mysqli_real_escape_string( $con , $_POST['city']);
$pincode = mysqli_real_escape_string( $con , $_POST['pin']);

$b_date =   $_POST['bdate'];
$gender = $_POST['gen'];
$phone = $_POST['phone'];
$tele = $_POST['telno'];
$adm_year = $_POST['adm'];
$pass_year = $_POST['pass'];
$branch = $_POST['branch'];
$spec = $_POST['spec'];
$comp1 = $_POST['comp1'];
$comp2 = $_POST['comp2'];
$comp3 = $_POST['comp3'];
$pass1 = $_POST['pass1'];
$username = $first_name . " " . $last_name;

$user_registration_query1 = "insert into students(first_name,last_name,enroll_id,b_day,father_name,mother_name,address,state,pin_code,phone,email_id,telephone,password) values('$first_name' , '$last_name' , '$enroll_id' , '$b_date'  , '$fname' , '$mname' , '$add' , '$city' , '$pincode' , '$phone' , '$email' , '$tele' , '$pass1')" or
die($user_registration_query1);
$user_registration_submit = mysqli_query($con,$user_registration_query1) or die(mysqli_error($con));

$user_registration_query2 = "insert into academic_details(adm_year,pass_year,Branch,spec,company1,company2,company3,enroll_id) values('$adm_year' , '$pass_year' , '$branch' ,  '$spec' , '$comp1' , '$comp2' , '$comp3','$enroll_id')" or
die($user_registration_query2);
$user_registration_submit = mysqli_query($con,$user_registration_query2) or die(mysqli_error($con));
echo "User Succesfully Inserted";
$_SESSION['username'] = $username;
$_SESSION['enroll_id'] = $enroll_id;

$_SESSION['id'] = mysqli_insert_id($con);
?>