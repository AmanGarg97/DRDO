<?php
require 'common.php';
session_start();






$enroll = $_POST['enroll'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['bdate'];
$gen =$_POST['gen'];
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
$specialization = $_POST['spec']; 
$comp1 = $_POST['comp1']; 
$comp2 =  $_POST['comp2'];

$user_update_query1 = "UPDATE students SET first_name='$firstname' , last_name='$lastname' , b_day='$dob' , gender='$gen' , father_name='$fname' , mother_name='$mname' , address='$add' , state='$state' , pin_code='$pin' ,  email_id='$email' WHERE enroll_id = '$enroll'"  or
die($user_update_query1);


$academic_update = "UPDATE academic_details SET adm_year='$adyr' , pass_year='$psyr' , Branch='$branch' , spec='$specialization' , company1='$comp1' , company2='$comp2' WHERE enroll_id = '$enroll'"  or
die($academic_update);


  $result = mysqli_query($con, $user_update_query1);
   
   if($result&&mysqli_query($con,$academic_update))
   {
       echo 'Data Updated';
       echo $result;
   }else{
       echo 'Data Not Updated';
       echo $result;
   }

//echo $result;
echo ("dc");
echo $firstname;

//header('location:index.html');

?>






