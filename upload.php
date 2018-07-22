<?php
if(isset($_POST['submit'])){
  $file = $_FILES['file'];
  print_r($file);
  $filename = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  
  $fileExt = explode('.' , $fileName);
  $fileActualExt = strtolower(end($fileExt));
  
  $allowed = array('jpg','jpeg','png','pdf');
  
  if(in_array($fileActualExt , $allowed)) {
    if($fileError === 0) {
      if($fileSize < 10000000) {
        $fileNameNew = uniqid('',true).".".$fileActualExit;
        $fileDestination='uploads/'.$fileNameNew;
      }
      else{
        echo "error big file";
      }
    }
    else{
      echo "error";
    }
  }
  else {
    echo "Cannot";
  }
  
}
































?>