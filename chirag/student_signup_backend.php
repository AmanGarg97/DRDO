
   <?php 
   require 'common.php';
   session_start();


?>


   
   <?php
    
    
    $enroll = $_POST['enroll'];
    $firstname = $_POST['firstname'];
    $pass = $_POST['pass1'];
    $cnf_pass = $_POST['pass2'];
    
    $checkQuery = "SELECT * from students";
    
    $result = mysqli_query($con,$checkQuery) or die(mysqli_error($con));
    
     $flag = 1;
    
     while($row = mysqli_fetch_array($result)){
      
         if($enroll==$row['enroll_id']){
             $flag=0;
             
             if($firstname!=$row['first_name']){
                 
                 echo ("Invalid name");
                 $flag = 2;
                 
             }
             else  if($row['password']!=null){
                 
                echo ("Bhosdike tu already registered h");
                 echo "<a href=login_stud.html>Login</a>";
                 
                 $flag = 2;
                 
                 
             }
             
             
             
             
             break;
         }
    
    }


     if($pass!=$cnf_pass){
              echo ("Passwords do not match");
              echo "<a href=index.html>Back</a>";
                            

              $flag = 2;
          }
     

      if($flag==0){
          
          
          $insert = "UPDATE students SET password = '$pass' where enroll_id='$enroll'" or
die($insert);
          
          $submit = mysqli_query($con,$insert) or die(mysqli_error($con));
          
          echo ("Registered successfully");
          echo ("Please login to continue");
          echo "<a href=login_stud.html>Login</a>";
          
          
          
          
      }
    else if($flag==1) {
             echo ("Student is not registered by the admin Contact admin for more details");
        echo "<a href=index.html>Back</a>";
             echo $flag;
         }
         
         
     
    
    
    
    
    
    
    
    ?>
    