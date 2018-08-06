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

    <link rel="stylesheet" href="style3.css">

    <title>Specification</title>
</head>
<body id="details-body">
    
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand sticky-top" id="nav" href="index.html">
           <span class="bpit-nav">BPIT </span><span class="search-nav">Search</span>        
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="stud_profile.php" id="profile" class="nav-link">Profile</a>
                </li>
            </ul>  
        </div>
    </nav>

    <div class="container formbox2">
        <h2 id="spec-heading">ADD PROFESSION</h2>
        <br>
        <form action="profession_backend.php" method="post">
            
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
                </div>

                <br><br>

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
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-0 col-md-5"></div>
                <div class="col-0 col-md-2">
                    <button type="submit" class="btn" id="btn">ADD</button>
                </div>
                <div class="col-0 col-md-5"></div>
            </div>

        </form>
    </div>
    <br>

</body>
</html>