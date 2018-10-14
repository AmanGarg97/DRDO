<?php
include 'common.php';
?>

<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
    
    
    
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
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
                        <a href="after_login_admin.php" id="home" class="nav-link">Home</a>
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
        <div class="col-0 col-md-3"></div>
            <div class="col-0 col-md-6">
                <div class="buttons">
                    <a href="#" class="pd" onclick="toggleVisibility('Menu1');" id="menu-div">Personal details
                    &nbsp;&nbsp;<i class="fas fa-greater-than">
                    </i></a>
                    &nbsp;
                    <a href="#" onclick="toggleVisibility('Menu2');" id="menu-div">Academic Details
                        &nbsp;&nbsp;<i class="fas fa-greater-than"></i>
                    </a>&nbsp;
                    <a href="#" onclick="toggleVisibility('Menu3');" id="menu-div">Professional Details</a>         
                </div>
            </div>
            <div class="col-0 col-md-3"></div>
    </div>
    
    
    <br>
    <!-- DIV 1 STARTS -->
     <form action="update_backend.php" method="post" enctype="multipart/form-data">

    

    <div class="container formbox1" id="Menu1">
        
          


        <h2 id="personal-heading">PERSONAL DETAILS</h2><br>
        
        

         
            <div class="personal-form">

                <!-- Enrollment no and profile picture -->
                <div class="row">
                    <div class="col">
                        <label for="Eno" id="enroll-numb">Enrollment Number</label><br>
                        <div class="row">
                            <div class="col">
                                <input id="Eno" type="number" class="form-control" name="enroll" value="<?php echo $_SESSION['enroll_id']?>" readonly>
                            </div>
                        </div>
                    </div>
                 </div>
                <br>

                <!-- name -->
                <label for="name-input" id="name">Name</label>
                <div class="row">
                    <div class="col">
                        <input id="name-input-first" type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['first_name'] ?>">
                    </div>
                    
                    <div class="col">
                        <input id="name-input-last" type="text" class="form-control" placeholder="Last name" 
                        name="lastname" value="<?php echo $_SESSION['last_name'] ?>">
                    </div>
                </div>
                <br>

                <!-- birth date -->
                <div>
                    <label for="dob" id="birth-date">Birth Date</label>
                    <input type="date" class="form-control" id="dob" value="<?php echo $_SESSION['b_day'] ?>" name="bdate">
                </div>
                <br>

                         <?php
    $gender = $_SESSION['gen'] 
?>
               
               
                <!-- gender -->
                <label for="defaultCheck1" id="gender">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1" name="gen" <?php if($gender == "male"){echo("checked");}?>>
                    <label class="form-check-label" for="defaultCheck1" id="gend">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" id="defaultCheck1" name="gen" <?php if($gender == "female"){echo("checked");}?>>
                    <label class="form-check-label" for="defaultCheck1" id="gend" >
                        Female
                    </label>
                </div><br>
        
                <!-- fathers and mothers name -->   
                <div class="row"> 
                    <div class="col">
                    <label for="fa-name" id="father">Father's name</label><br>
                    <div class="row">
                        <div class="col">
                            <input id="fa-name" type="text" class="form-control" value="<?php echo $_SESSION['fname'] ?>" name="fname">
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <label for="ma-name" id="mother">Mother's name</label><br>
                    <div class="row">
                        <div class="col">
                            <input id="ma-name" type="text" class="form-control" value="<?php echo $_SESSION['mname'] ?>" name="mname">
                        </div>
                    </div>
                    </div>
                </div><br>

                <!-- Address -->
                <label for="add1" id="add">Address1</label><br>
                <input id="add1" type="text" class="form-control" value="<?php echo $_SESSION['add'] ?>" name="add">
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
                    <input id="state1" type="text" class="form-control" value="<?php echo $_SESSION['state'] ?>" name="city">
                </div>
                <div class="col">
                    <label for="pincode" id="pin-code">Pin Code</label><br>
                    <input id="pincode" type="number" class="form-control" name="pin" value="<?php echo $_SESSION['pincode'] ?>" >
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
            pattern="[0-6]{3}-[0-9]{8}" value="<?php echo $_SESSION['tel'] ?>" maxlength="12">
            <br>

            <!-- phone no and email address -->
            <div class="row">
                <div class="col">
                    <label for="phn-no" id="phone">Phone No.</label><br>
                    <input id="phn-no" type="tel" class="form-control" name="phone" 
                    pattern="[0-9]{10}" value="<?php echo $_SESSION['phone'] ?>" maxlength="10">
                </div>
    
                <div class="col">
                    <label for="email" id="e-mail">E-Mail</label><br>
                    <input id="email" type="email" class="form-control" name="youremail" value="<?php echo $_SESSION['email'] ?>">
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
                    <input type="number" class="form-control" id="adm" name="adm" value="<?php echo $_SESSION['admyear'] ?>">
                </div>
                <div class="col">
                    <label for="pass" id="year">Year of Passing Out</label>
                    <input type="number" class="form-control" id="pass" name="pass" value="<?php echo $_SESSION['passyear'] ?>">
                </div>
            </div><br>

            <!-- branch -->
            <label for="inputState" id="branch">Branch</label>
            
            <?php
    $selected = $_SESSION['branch'] 
?>

            
            
            <select id="inputState" class="form-control" name="branch" >
                <option >Choose...</option>
                <option <?php if($selected == "CSE-A"){echo("selected");}?>>CSE-A</option>
                <option <?php if($selected == "CSE-B"){echo("selected");}?>>CSE-B</option>
                <option <?php if($selected == "ECE-A"){echo("selected");}?>>ECE-A</option>
                <option <?php if($selected == "ECE-B"){echo("selected");}?>>ECE-B</option>
                <option <?php if($selected == "IT"){echo("selected");}?>>IT</option>
                <option <?php if($selected == "EEE"){echo("selected");}?>>EEE</option>
                
                
            </select><br>

            <!-- subjects and faculty details sem wise -->

            <!-- specialization -->
            <label for="spec" id="specs">Specialization</label><br>
            <textarea rows="2" cols="40" id="spec" name="spec"><?php echo $_SESSION['spec'] ?></textarea>
            <br><br>

        </div>
       

    </div>
         
    <!-- DIV 2 ENDS -->

    <!-- DIV 3 STARTS -->
   
    <div class="container toAdd formbox3" id="Menu3" style="display:none;">

               
       
       
        <h2 id="profession-heading">PROFESSSION</h2><br>

        <div class="personal-form">

          
        <label id="current-heading">Currently Working</label><br>
        <div class="row">
            <div class="col">
                <label for="comp" id="compname">Company Name</label>
                <input type="text" class="form-control" id="comp" name="comp1"  value="<?php echo $_SESSION['comp1'] ?>">
            </div>
            <div class="col">
                <label for="pos" id="position">Position</label>
                <input type="text" class="form-control" id="pos">
            </div>
            <div class="col">
                <label for="date" id="from">From</label>
                <input type="date" class="form-control" id="date" >
            </div>
        </div><br>

        <!-- previously working -->
        <label id="current-heading">Previously Working</label>
        <div class="row">
            <div class="col">
                <label for="prev" id="compname">Company Name</label>
                <input type="text" class="form-control" id="prev" name="comp2" value="<?php echo $_SESSION['comp2'] ?>">
            </div>
            <div class="col">
                <label for="pos" id="position">Position</label>
                <input type="text" class="form-control" id="pos" >
            </div>
            <div class="col">
                <label for="dte" id="from">From</label>
                <input type="date" class="form-control" id="dte" >
            </div>
            <div class="col">
                <label for="dt" id="to">To</label>
                <input type="date" class="form-control" id="dt" >
            </div>
        </div><br>

        <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="prev" name="comp3" value="<?php echo $_SESSION['comp3'] ?>">
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
        <br><br><br>
        </div>
        <div class="row">
                <div class="col-0 col-md-5"></div>
                <div class="col-0 col-md-2">
                    <input type="submit" class="btn" id="btn" name = "update" value="Update">
                </div>
                <div class="col-0 col-md-5"></div>
        </div>

        


    </div>
       </form>

    <!-- DIV 3 ENDS -->



    <br>

<br><br>    

  

<script>
  
  var divs = ["Menu1", "Menu2", "Menu3"];
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