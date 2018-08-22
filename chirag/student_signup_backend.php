
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
                 
                 header('Location: invalid-name.html');
                 $flag = 2;
                 
             }
             else  if($row['password']!=null){
                 
                header('Location: registered.html');
                 $flag = 2;
                 
                 
             }
             
             
             
             
             break;
         }
    
    }


     if($pass!=$cnf_pass){
              header('Location: pass-notmatch.html');
                            

              $flag = 2;
          }
     

      if($flag==0){
          
          
          $insert = "UPDATE students SET password = '$pass' where enroll_id='$enroll'" or
die($insert);
          
          $submit = mysqli_query($con,$insert) or die(mysqli_error($con));
          
          header('Location: success.html');
          
          
          
          
      }
    else if($flag==1) {
             header('Location: not-registered.html');
         }
         
         
     
    
    
    
    
    
    
    
    ?>
    