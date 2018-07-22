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

    <link rel="stylesheet" href="style2.css" type="text/css">

    <title>Review-form</title>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg review">
        <a class="navbar-brand" href="index.html"><span class="bpithead">BPIT </span>
            <span class="searchhead">Search</span></a>
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
                        <a href="#">Logout</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <br><br>
    

    <div class="container d-print-block">
        <div class="row">
            <div class="col-12 review-form">
                <form action="" method="">
                    <div class="row">                   
                        <div class="col-lg-12">
                            <h2 class="heading">BHAGWAN PARSHURAM INSTITUTE OF TECHNOLOGY</h2>
                            <h5 class="heading2">Affiliated To GGSIPU, Delhi A unit of Bhartiya Brahmin Charitable Trust ISO 9001:2008 Certified</h5>
                        </div>
                    </div>
                    <hr>

                    <!-- Personal Details -->
                    <div class="row">
                        <div class="col-lg-10 d-print-block">
                            <h4 class="personal-heading">PERSONAL DETAILS</h4>
                        </div>
                        <div class="col-lg-2"><?php echo $_SESSION['date'];  ?></div>
                    </div>
                    <br><br>
                    <div class="details-box d-print-inline-block"> 
                        <dl class="row">
                            <div class="col-md-10">
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Enrollment No.</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['enroll_id']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Name</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['username']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Birth date</p></dt>
                                <dd class="col-sm-4 input"><p><?php
                                
                                 echo $_SESSION['b_day'];
                                  ?>
                                </p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Gender</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['gen']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Father's Name</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['fname']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Mother's Name</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['mname']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Address</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['add']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Tel-No.</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['tel']; ?></p></dd>
                                </div>
                                <div class="row">
                                <dt class="col-sm-6 detail"><p>Phone No.</p></dt>
                                <dd class="col-sm-4 input"><p><?php echo $_SESSION['phone']; ?></p></dd>
                                </div>
                            </div>

                            <!-- profile image -->
                            <div class="col-md-2">
                                <div class="profile-box"></div>
                            </div>

                        </dl>
                    </div>
                    <br>

                    <!-- Academic details --> 
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="personal-heading">ACADEMIC DETAILS</h4>
                        </div>
                    </div>
                    <br><br>
                    <div class="details-box">
                            <dl class="row">
                                <div class="col-md-10">

                                    <div class="row">
                                            <dt class="col-sm-6 detail"><p>Year of Admission</p></dt>
                                            <dd class="col-sm-4 input"><p><?php echo $_SESSION['admyear']?></p></dd>
        
                                    </div>
                                    <div class="row">
                                            <dt class="col-sm-6 detail"><p>Year of Passing Out</p></dt>
                                            <dd class="col-sm-4 input"><p><?php echo $_SESSION['passyear']?></p></dd>
                                    </div>                                   
                                    <div class="row">
                                            <dt class="col-sm-6 detail"><p>Branch</p></dt>
                                            <dd class="col-sm-4 input"><p><?php echo $_SESSION['branch']?></p></dd>
                                    </div>
                                    <div class="row">
                                            <dt class="col-sm-6 detail"><p>Specialization</p></dt>
                                            <dd class="col-sm-4 input"><p><?php echo $_SESSION['spec']?></p></dd>
                                    </div>
    
                                    
                                </div>
                                
                            </dl>
                    </div>
                    <br><br>

                    <!-- Professional details -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="personal-heading">PROFESSIONAL DETAILS</h4>
                        </div>
                    </div>
                    <br><br>
                    <div class="details-box">
                        <dl class="row">
                            <div class="col-md-10">
                                <div class="row">
                                        <dt class="col-sm-6 detail"><p>Company Name</p></dt>
                                        <dd class="col-sm-4 input"><p><?php echo $_SESSION['comp1']?></p></dd>
    
                                </div>
                                               
                                                   
                            </div>
                            
                        </dl>
                    </div>

                    <input type="button" value="Print" class="print" onclick="window.print()">
                </form>
            </div>
            
            
    </div>
    <br><br>
    
    </script>

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