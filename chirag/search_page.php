<?php 
   require 'common.php';
   session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="style4.css">

    <title>Search</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg searchpage-nav">
        <a class="navbar-brand sticky-top" id="nav" href="index.html">
            <span class="bpit-nav">BPIT </span><span class="search-nav">Search</span>        
        </a>
<!--
        <form class="">
            <input id="search" class="form-control" type="search" placeholder="Search..." aria-label="Search">
        </form>
-->

        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
         aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">  
            <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="dropbtn" id="login">Login</button>
                    <div class="dropdown-content">
                        <a href="login_stud.html">Student</a>
                        <a href="login_admin.html">Admin</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

   
    <?php 
    
      $search = $_POST['search'];
    //echo $search;
    $select_query = "SELECT * FROM students where first_name like '%$search%' or last_name like '%$search%' or address like '%$search%' or state like '%$search%' or email_id like '%$search%'";
    $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    
   
    
    
    ?>
   
   <?php
  
  if(mysqli_num_rows($select_query_result) > 0)
  {
    
     
        while($row = mysqli_fetch_array($select_query_result)){
//                echo  "<li>".$row['first_name']."</li>";
            
        $enroll = $row['enroll_id'];
            
        $select_acad = "SELECT * FROM academic_details where enroll_id = '$enroll'";
            
        $acad_query_result = mysqli_query($con,$select_acad) or die(mysqli_error($con));
            
        $row_acad = mysqli_fetch_array($acad_query_result);
            
        echo '<div class="container">
         <div class="row">
           <div class="col-1 col-md-1"></div>
           <div class="col-10 col-md-10 show-result">
               <h2>'.$row['first_name']. " " .$row['last_name']. " " ."(". $row_acad['Branch'].')</h2>
               <hr>
              <div class="row">
                    <div class="col-5">
                      <p>Enrollment No. :'.$row['enroll_id'].'</p>
                       <p>Batch :'.$row_acad['adm_year']. "-" .$row_acad['pass_year'].'</p>
                      <p>E-mail :'.$row['email_id'].'</p>
                  </div>
                   <div class="col-5">
                       <p>Phone No. :'.$row['phone'].'</p>
                       <p>Specification :'.$row_acad['spec'].'</p>
               </div>
               </div>              
            </div>
            <div class="col-1 col-md-1"></div
        </div>
</div>';
             
    } 
    
       
  }
  
  
  else{
  
  header("Location: search-not-found.html"); 
  exit();
 
  
  }
  
  
  ?>
   
   
   
<!--
    <div class="container">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10 show-result">
                <h2>Chirag Barka( CSE-A )</h2>
                <hr>
                <div class="row">
                    <div class="col-5">
                        <p>Enrollment No. : 01620802716</p>
                        <p>Batch : 2016-2020 </p>
                        <p>E-mail : chirag.barka@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <p>Phone No. : 9899689562</p>
                        <p>Specification : Web Development</p>
                    </div>
                </div>                
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10 show-result">
                <h2>Chirag Barka( CSE-A )</h2>
                <hr>
                <div class="row">
                    <div class="col-5">
                        <p>Enrollment No. : 01620802716</p>
                        <p>Batch : 2016-2020 </p>
                        <p>E-mail : chirag.barka@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <p>Phone No. : 9899689562</p>
                        <p>Specification : Web Development</p>
                    </div>
                </div>                
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10 show-result">
                <h2>Chirag Barka( CSE-A )</h2>
                <hr>
                <div class="row">
                    <div class="col-5">
                        <p>Enrollment No. : 01620802716</p>
                        <p>Batch : 2016-2020 </p>
                        <p>E-mail : chirag.barka@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <p>Phone No. : 9899689562</p>
                        <p>Specification : Web Development</p>
                    </div>
                </div>          
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10 show-result">
                <h2>Chirag Barka( CSE-A )</h2>
                <hr>
                <div class="row">
                    <div class="col-5">
                        <p>Enrollment No. : 01620802716</p>
                        <p>Batch : 2016-2020 </p>
                        <p>E-mail : chirag.barka@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <p>Phone No. : 9899689562</p>
                        <p>Specification : Web Development</p>
                    </div>
                </div>          
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </div>
-->

</body>
</html>