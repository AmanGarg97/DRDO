<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <title>Document</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <br/>
    <input type="file" name="image">
    <br/><br/>
    <input type="submit" name="submit" value="Upload" />
  </form>
  <?php
  if(isset($_POST['submit']))
  {
    if(getimagesize($_FILES['image']['tmp_name']) ==FALSE)
    {
      echo "Please select an image";
    }
    else
    {
      $image = addslashes($_FILES['image']['tmp_name']);
      $name = addslashes($_FILES['image']['name']);
      $image = file_get_contents($image);
      $image=base64_encode($image);
      
    }
  }
  
  function saveimage()
  {
    $con = mysql_connect("localhost","root","");
    mysql_select_db("personal_details",$con);
    $qry="insert into students(name,image) values ('$name','$image') where enroll_id = '12345' ";
    $result = mysql_query($qry,$con);
    if($result)
    {
      echo "<br/> Image uploaded";
    }
    
    else
    {
      echo "<br/> Image not Uploaded";
    }
  }
  ?>
</body>
</html>