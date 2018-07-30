<!--<?php
include 'common.php';
?>
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>Personal Information</title>
</head>
<body id="details-body">

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand sticky-top" id="nav" href="index.html">
           <span class="bpit-nav">BPIT </span><span class="search-nav">Search</span>        
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="after_login_admin.html" id="home" class="nav-link">Home</a>
                    </li>
                </ul>  
                <ul class="navbar-nav ml-auto">
                    <div class="logout">
                        <a href="logout.php" id="logout">Logout</a>
                    </div>
                </ul>
            </div>
    </nav><br>

    <div class="row">
        <div class="col-0 col-md-4"></div>
        <div class="col-0 col-md-4">
                <div class="buttons">
                        <a href="#" class="pd" onclick="toggleVisibility('Menu1');" id="menu-div">Personal details
                           &nbsp;&nbsp;<i class="fas fa-greater-than">
                        </i></a>
                        &nbsp;
                        <a href="#" onclick="toggleVisibility('Menu2');" id="menu-div">Academic Details
                        </a>         
                    </div>
        </div>
        <div class="col-0 col-md-4"></div>
    </div>
    
    <br>
    <!-- DIV 1 STARTS -->

    <div class="container formbox1" id="Menu1">

        <h2 id="personal-heading">PERSONAL DETAILS</h2><br>
        
        <form action="test.php" method="post"  class="form" role="form" enctype="multipart/form-data">

            <div class="personal-form">

                <!-- Enrollment no and profile picture -->
                <div class="row">
                    <div class="col">
                        <label for="Eno" id="enroll-numb">Enrollment Number</label><br>
                        <div class="row">
                            <div class="col">
                                <input id="Eno" type="number" class="form-control" name="enroll">
                            </div>
                        </div>
                    </div>
                 </div>
                <br>

                <!-- name -->
                <label for="name-input" id="name">Name</label>
                <div class="row">
                    <div class="col">
                        <input id="name-input-first" type="text" class="form-control" placeholder="First name"
                        name="firstname">
                    </div>
                    <div class="col">
                        <input id="name-input-last" type="text" class="form-control" placeholder="Last name" 
                        name="lastname">
                    </div>
                </div>
                <br>

                <!-- birth date -->
                <div>
                    <label for="dob" id="birth-date">Birth Date</label>
                    <input type="date" class="form-control" id="dob" placeholder="DOB" name="bdate">
<!--             <input type="date" data-date="" data-date-format="yyyy-mm-dd">-->

               

                </div>
                <br>

                <!-- gender -->
                <label for="defaultCheck1" id="gender">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1" name="gen">
                    <label class="form-check-label" for="defaultCheck1" id="gend">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1" name="gen">
                    <label class="form-check-label" for="defaultCheck1" id="gend">
                        Female
                    </label>
                </div><br>
        
                <!-- fathers and mothers name -->   
                <div class="row"> 
                    <div class="col">
                    <label for="fa-name" id="father">Father's name</label><br>
                    <div class="row">
                        <div class="col">
                            <input id="fa-name" type="text" class="form-control" placeholder="Name" name="fname">
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <label for="ma-name" id="mother">Mother's name</label><br>
                    <div class="row">
                        <div class="col">
                            <input id="ma-name" type="text" class="form-control" placeholder="Name" name="mname">
                        </div>
                    </div>
                    </div>
                </div><br>

                <!-- Address -->
                <label for="add1" id="add">Address1</label><br>
                <input id="add1" type="text" class="form-control" placeholder="Line 1" name="add">
                <br>
        
        <!-- Right now don't need this -->
<!--

        <label for="ad2" id="add">Address2</label><br>
        <input id="ad2" type="text" class="form-control" placeholder="Line 2">
        <br>
-->

            <div class="row">
                <div class="col">
                    <label for="state1" id="state">State</label><br>
                    <input id="state1" type="text" class="form-control" name="city">
                </div>
                <div class="col">
                    <label for="pincode" id="pin-code">Pin Code</label><br>
                    <input id="pincode" type="number" class="form-control" name="pin">
                </div>
            </div><br>
<!--
            <div class="col">
                <label for="state" id="st">State</label><br>
                <input id="state" type="text" class="form-control">
            </div>
-->
            <label for="telephone" id="tel-no">Tel-No</label><br>
            <input id="telephone" type="tel" class="form-control" name="telno">
            <br>

            <!-- phone no and email address -->
            <div class="row">
                <div class="col">
                    <label for="phn-no" id="phone">Phone No.</label><br>
                    <input id="phn-no" type="tel" class="form-control" name="phone">
                </div>
    
                <div class="col">
                    <label for="email" id="e-mail">E-Mail</label><br>
                    <input id="email" type="email" class="form-control" name="youremail">
                </div>
            </div>
        </div>        
        <br><br><br>
    </div>
    <!-- DIV 1 ENDS -->
  
  
  <!-- DIV 2 STARTS -->
   
    <div class="container toAdd formbox2" id="Menu2" style="display:none;">

        <h2 id="academic-heading">ACADEMIC DETAILS</h2><br>

        <div class="personal-form">

            <!--year of admsn and year of passing out -->
            <div class="row">
                <div class="col">
                    <label for="adm" id="year">Year of Admission</label>
                    <input type="number" class="form-control" id="adm" name="adm">
                </div>
                <div class="col">
                    <label for="pass" id="year">Year of Passing Out</label>
                    <input type="number" class="form-control" id="pass" name="pass">
                </div>
            </div><br>

            <!-- branch -->
            <label for="inputState" id="branch">Branch</label>
            <select id="inputState" class="form-control" name="branch">
                <option selected>Choose...</option>
                <option>CSE-A</option>
                <option>CSE-B</option>
                <option>ECE-A</option>
                <option>ECE-B</option>
                <option>IT</option>
                <option>EEE</option>
            </select><br>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-0 col-md-5"></div>
            <div class="col-0 col-md-2">
                <button type="submit" class="btn" id="btn" name="submit">Submit</button>
            </div>
            <div class="col-0 col-md-5"></div>
        </div>

    </div>
         
    <!-- DIV 2 ENDS -->

  
    </form>
  

<script>
  
  var divs = ["Menu1", "Menu2"];
var visibleDivId = null;
function toggleVisibility(divId) {
  if(visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}
  
  
  </script>

</body>
</html>