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

    <title>Personal Information</title>
</head>
<body id="details-body">

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand sticky-top" id="nav" href="index.html">
           <span class="bpit-nav">BPIT </span><span class="search-nav">Search</span>        
        </a>
    </nav><br>
    
    <div class="buttons">
        <a href="#" class="pd" onclick="toggleVisibility('Menu1');" id="menu-div">Personal details
           &nbsp;&nbsp;<i class="fas fa-greater-than">
        </i></a>
        &nbsp;
        <a href="#" onclick="toggleVisibility('Menu2');" id="menu-div">Academic Details
           &nbsp;&nbsp;<i class="fas fa-greater-than">
        </i></a>
        &nbsp;
        <a href="#" onclick="toggleVisibility('Menu3');" id="menu-div">Professional Details
             &nbsp;&nbsp;<i class="fas fa-greater-than">
        </i></a>
        &nbsp;
        </a>
        <a href="#" onclick="toggleVisibility('Menu4');" id="menu-div">Set Password</a> 
    </div>
    <br>
    <!-- DIV 1 STARTS -->

    <div class="container formbox1" id="Menu1">

        <h2 id="personal-heading">PERSONAL DETAILS</h2><br>
        
        <form action="enter.php" method="post" class="form" role="form" enctype="multipart/form-data">

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
                    <div class="col">
                        <label for="profile-img" id="pro-pic">Profile Picture</label>
                        <div class="row">
                            <div class="col upload-btn-wrapper">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" 
                                        id="inputGroupFile02" name="profile-img">
                                        <label class="custom-file-label" for="inputGroupFile02" 
                                        aria-describedby="inputGroupFileAddon02">Choose file..</label>
                                    </div>
                                </div>
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
            <input id="telephone" type="tel" class="form-control" name="telno" 
            pattern="[0-6]{3}-[0-9]{8}" placeholder="011-25252525" maxlength="12">
            <br>

            <!-- phone no and email address -->
            <div class="row">
                <div class="col">
                    <label for="phn-no" id="phone">Phone No.</label><br>
                    <input id="phn-no" type="tel" class="form-control" name="phone" 
                    pattern="[0-9]{10}" maxlength="10">
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

            <!-- subjects and faculty details sem wise -->

            <!-- specialization -->
            <label for="spec" id="specs">Specialization</label><br>
            <textarea rows="2" cols="40" id="spec" name="spec"></textarea>
            <br><br>

        </div>

    </div>
         
    <!-- DIV 2 ENDS -->

    <!-- DIV 3 STARTS -->
   
    <div class="container toAdd formbox3" id="Menu3" style="display:none;">

        <h2 id="profession-heading">PROFESSSION</h2><br>

        <div class="personal-form">

        <!-- currently working -->
        <label id="current-heading">Currently Working</label><br>
        <div class="row">
            <div class="col">
                <label for="comp" id="compname">Company Name</label>
                <input type="text" class="form-control" id="comp" name="comp1">
            </div>
            <div class="col">
                <label for="pos" id="position">Position</label>
                <input type="text" class="form-control" id="pos">
            </div>
            <div class="col">
                <label for="date" id="from">From</label>
                <input type="date" class="form-control" id="date">
            </div>
        </div><br>

        <!-- previously working -->
        <label id="current-heading">Previously Working</label>
        <div class="row">
            <div class="col">
                <label for="prev" id="compname">Company Name</label>
                <input type="text" class="form-control" id="prev" name="comp2">
            </div>
            <div class="col">
                <label for="pos" id="position">Position</label>
                <input type="text" class="form-control" id="pos">
            </div>
            <div class="col">
                <label for="dte" id="from">From</label>
                <input type="date" class="form-control" id="dte">
            </div>
            <div class="col">
                <label for="dt" id="to">To</label>
                <input type="date" class="form-control" id="dt">
            </div>
        </div><br>

        <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="prev" name="comp3">
                </div>
                <div class="col">                        
                    <input type="text" class="form-control" id="pos">
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="dte">
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="dt">
                </div>
        </div>

        </div>

    </div>

    <!-- DIV 3 ENDS -->


    <!-- DIV 4 STARTS -->

    <div class="container toAdd formbox4" id="Menu4" style="display:none">

        <h2 id="set-pass">SET PASSWORD</h2>
        <br>

        <div class="personal-form-pass">

            <input type="password" name="pass1" id="pass" placeholder="Password" class="form-control">
            <br>
            <input type="password" name="pass2" id="pass" placeholder="Confirm Password" class="form-control">
            <br>

            <button type="submit" class="btn" id="btn" 
            onclick="window.open('index.html')">Submit</button>

        </div>
    </div>
    <br>

<br><br>    
    <!-- DIV 4 ENDS -->
    </form>
  
   
    
<!--
    <script>
  $(document).ready(function(){

  $('div.dropdown').each(function() {
    var $dropdown = $(this);

    $("a.dropdown-link", $dropdown).click(function(e) {
      e.preventDefault();
      $div = $("div.dropdown-container", $dropdown);
      $div.toggle();
      $("div.dropdown-container").not($div).hide();
      return false;
    });

});
    
  $('html').click(function(){
    $("div.dropdown-container").hide();
  });
     
});
  </script>
-->

<script>
  
  var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
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