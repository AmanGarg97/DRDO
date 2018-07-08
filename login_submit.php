<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login_stud.php'); 
}
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
    
    <link rel="stylesheet" href="style1.css">

    <title>Profile</title>
</head>
<body>
    

    <!-- navbar-->
    <nav class="navbar navbar-expand-lg status">
        <a class="navbar-brand" href="index.html"><span class="bpithead">BPIT </span><span class="searchhead">Search</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
         aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">  
            <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="dropbtn username" id="login">
                      Hi! <?php echo $_SESSION['username']; ?>
                    </button>
                    <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <br><br><br>

    <div class="container">

        <div class="col-">

                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Form_id</th>
                            <th scope="col" colspan="2">Details</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td><a href="#" class="details">Review Form</a></td>
                            <td><a href="#" class="details">Update</a></td>
                            <td><?php echo $_SESSION['status']; ?></td>
                          </tr>
                        </tbody>
                    </table>
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