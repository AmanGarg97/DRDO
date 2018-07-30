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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">

    <link rel="stylesheet" href="style3.css">

    <title>Admin</title>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">
            <span class="bpithead">BPIT </span><span class="searchhead">Search</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
         aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">  
            <ul class="navbar-nav ml-auto">
                <div class="logout">
                    <a href="../logout.php" id="logout">Logout</a>
                </div>
            </ul>
        </div>
    </nav>
    
    <div class="row after_student">
        <div class="col-0 col-md-4"></div>
        <div class="col-12 col-md-4">
            <div class="student-count">
                <div class="content">
                    <h4>No. of Students Registred</h4>
                    <h5 class="count"><?php echo $_SESSION['id']; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-0 col-md-4"></div>
    </div>

    <div class="row after_student">
        <div class="col-0 col-md-2"></div>
        <div class="col-0 col-md-8 add-students">
            <div class="row after_student">
                <div class="col-md-12">
                    <a href="signup_form.php" class="add">
                    <h3>Add Student</h3>
                </a>
                </div>
            </div>
        </div>
        <div class="col-0 col-md-2"></div>
    </div>
    
    <div class="row after_student">
        <div class="col-0 col-md-2"></div>
        <div class="col-0 col-md-8 add-students">
            <div class="row after_student">
                <div class="col-md-12">
                    <a href="update_form.html" class="update"><h3>Update Student Details</h3></a>
                </div>
            </div>
        </div>
        <div class="col-0 col-md-2"></div>
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