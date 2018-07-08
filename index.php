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
    
    <link rel="stylesheet" href="style1.css">

    <title>BPIT Search</title>
</head>
<body class="searchbody">
    
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light searchnav">
        
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
                        <a href="login_stud.php">Student</a>
                        <a href="login_admin.php">Admin</a>
                    </div>
                </div>&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" id="signup" href="signup_form.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br>

    <h1><span class="bpit">BPIT</span><span class="srch"> Search</span></h1><br>

    <!-- search button and icon -->
    <div class="box">
        <div class="inner-addon right-addon">
            <i class="fas fa-search"></i>      
            <input type="search" id="search" class="shadow">
        </div>
        <br><br>
        <button type="submit" class="btn" id="btn">Search</button>
    </div>
   
   
    <script src="script.js"></script>

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