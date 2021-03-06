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
    <title>Login Student</title>
</head>
<body id="loginbody">
    
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand sticky-top" id="nav" href="index.html">
                <span class="bpit-nav">BPIT </span><span class="search-nav">Search</span>        
            </a>
        </nav>

    <div class="container loginbox">
        <h3 id="login-heading">STUDENT LOGIN</h3>
        <br><br>
        <form method="post" action="login_submit_backend.php">
            <div id="login-form">
              <input id="Eno" type="number" class="form-control" name="enroll" placeholder="Enrollment No.">
                <br>
                <input class="form-control" id="pass" type="password" placeholder="Password" name="pass">
                <br>
<!--
                <button class="btn login-btn" id="loginbtn" 
                onclick="window.open('after_login.html')">LOGIN</button>
-->
               <button class="btn login-btn">LOGIN</button>
                <br><br><br>
            </div>
            <span class="psws">Forgot <a href="" id="pswrd">Password?</a></span>
        </form>

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