
<?php
require 'common.php';
session_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
 <title>Search Result</title>
</head>
<body>
    
    <?php 
    
      $search = $_POST['search'];
    //echo $search;
    $select_query = "SELECT * FROM students where first_name like '%$search%' or last_name like '%$search%' or address like '%$search%' or state like '%$search%' or email_id like '%$search%'";
    $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    
    
    
    
    
    ?>
    
    <ol>
        <?php
        while($row = mysqli_fetch_array($select_query_result)){
                echo  "<li>".$row['first_name']."</li>";
    } 
    
        ?>
        
    </ol>
    
    
</body>