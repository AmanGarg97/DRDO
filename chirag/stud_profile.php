<?php

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
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <link rel="stylesheet" href="style3.css">

    <title>Profile</title>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky">
        <a class="navbar-brand" href="index.html">
            <span class="bpithead">BPIT </span><span class="searchhead">Search</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
         aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">  
            <ul class="navbar-nav ml-auto">
                        <li class="nav-item screen">
                            <a class="nav-link pl-0 text-nowrap profile-header" href="#">
                                    <i class="fas fa-user"></i> 
                                <span class="font-weight-bold">Profile</span></a>
                        </li>
                        
                        <li class="nav-item sidebar-link screen">
                            <a class="nav-link pl-0 links" href="#">
                                    <i class="fas fa-print"></i>                                
                                <span class=" d-md-inline">Print Form</span></a>
                        </li>
                        <li class="nav-item sidebar-link screen">
                            <a class="nav-link pl-0 links" href="spec_form.php">
                                    <i class="fas fa-pen"></i> 
                                <span class="d-md-inline">Update Specialization</span></a>
                        </li>
                        <li class="nav-item sidebar-link screen">
                            <a class="nav-link pl-0 links" href="profession_form.php">
                                    <i class="fas fa-pen"></i>
                                 <span class="d-md-inline">Update Profession</span></a>
                        </li>
                        <li class="nav-item sidebar-link screen">
                            <a class="nav-link pl-0 links" href="#">
                                    <i class="fas fa-key"></i> 
                                <span class="d-md-inline">Change Password</span></a>
                        </li>
                        <li class="nav-item sidebar-link screen">
                            <a class="nav-link pl-0 links" href="logout.php">
                                    <i class="fas fa-sign-out-alt"></i>                                
                                <span class=" d-md-inline">Sign Out</span></a>
                        </li>
            </ul>
            
        </div>
    </nav>

    <div class="container-fluid">
    <div class="row h-100">
        <div class="col-0 col-md-2 p-0 bg-dark sidebar">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0 text-nowrap profile-header" href="#">
                                    <i class="fas fa-user"></i> 
                                <span class="font-weight-bold">Profile</span></a>
                        </li>
                        
                        <li class="nav-item sidebar-link">
                            <a class="nav-link pl-0 links" href="../review-form.php">
                                    <i class="fas fa-print"></i>                                
                                <span class="d-none d-md-inline">Print Form</span></a>
                        </li>
                        <li class="nav-item sidebar-link">
                            <a class="nav-link pl-0 links" href="spec_form.php">
                                    <i class="fas fa-pen"></i> 
                                <span class="d-none d-md-inline">Update Specialization</span></a>
                        </li>
                        <li class="nav-item sidebar-link">
                            <a class="nav-link pl-0 links" href="profession_form.php">
                                    <i class="fas fa-pen"></i>
                                 <span class="d-none d-md-inline">Update Profession</span></a>
                        </li>
                        <li class="nav-item sidebar-link">
                            <a class="nav-link pl-0 links" href="#">
                                    <i class="fas fa-key"></i> 
                                <span class="d-none d-md-inline">Change Password</span></a>
                        </li>
                        <li class="nav-item sidebar-link">
                            <a class="nav-link pl-0 links" href="logout.php">
                                    <i class="fas fa-sign-out-alt"></i>                                
                                <span class=" d-md-inline">Sign Out</span></a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-12 col-md-10 col-sm-10">
            <div class="row">
                <div class="col-0 col-md-5"></div>
                <div class="col-0 col-md-4 stud-name">
                    <h2><?php echo $_SESSION['username']; ?></h2>
                </div>
                <div class="col-0 col-md-3"></div>
            </div>
            <div class="row information">
                <div class="col-0 col-md-1"></div>
                <div class="col-12 col-md-5">
                    <h4>Basic information</h4>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span>Full Name</span><p><?php echo $_SESSION['username']  ?></p></li>
                            <li class="list-group-item"><span>Enrollment No.</span><p><?php echo $_SESSION['enroll_id']; ?></p></li>
                            <li class="list-group-item"><span>E-mail</span><p><?php echo $_SESSION['email']; ?></p></li>
                            <li class="list-group-item"><span>Gender</span><p><?php echo $_SESSION['gen']; ?></p></li>
                            <li class="list-group-item"><span>DOB</span><p><?php echo $_SESSION['b_day']; ?></p></li>
                            <li class="list-group-item"><span>Contact</span><p><?php echo $_SESSION['phone']; ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <h4 class="academic">Academic Details</h4>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span>Branch</span><p><?php echo $_SESSION['branch']; ?></p></li>
                            <li class="list-group-item"><span>Batch</span><p>2016-2020</p></li>
                            <li class="list-group-item"><span>Specification</span><p><?php echo $_SESSION['spec']; ?></p></li>
                        </ul>
                    </div>     
                </div>
                <div class="col-0 col-md-1"></div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
    crossorigin="anonymous"></script>



</body>
</html>