<?php
error_reporting(0);
 include('connection.php');
?>



<!doctype html>
<html language="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register student </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">image </label>
        <input type="file" class="form-control" name="uploadfile" required>
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">first name</label>
        <input type="text" class="form-control" name="fname" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">last name</label>
        <input type="text" class="form-control" name="lname" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password" required>
      </div>

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label" style="margin:30px">gender</label>
        <select name="gender" required>
          <option value="">select</option>
          <option value="male">male</option>
          <option value="female">female</option>
        </select>
      </div>


      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">phone number</label>
        <input type="text" class="form-control" id="inputEmail4" name="phone" required>
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label"  style="margin:30px" > caste</label>
        <input type="radio" name="caste" value="general" required>genreal
        <input type="radio" name="caste" value="obc" required>obc
        <input type="radio" name="caste" value="sc" required>sc
        <input type="radio" name="caste" value="st" required>st
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label"  style="margin:30px" > language</label>
        <input type="checkbox" name="language[]" value="hindi" >hindi
        <input type="checkbox" name="language[]" value="english" >english
        <input type="checkbox" name="language[]" value="spanish" >spanish
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="textarea" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
  </div>
  <input type="submit" value="submit" class="btn btn-success" name="register">

  </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>

<?php

if($_POST["register"]){


  $filename=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="images/".$filename;
  move_uploaded_file($tempname,$folder);

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $pwd=$_POST["password"];
  $gender=$_POST["gender"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $caste=$_POST["caste"];

  $language=$_POST["language"];
  $language1=implode(",",$language);
  // echo $language1;

  $address=$_POST["address"];

  // if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" && $address !=""){

  

  $query="INSERT INTO STUDENT(std_img,fname,lname,pwd,gender,email,phone,caste,language,address) VALUES('$folder','$fname','$lname','$pwd','$gender','$email','$phone','$caste','$language1','$address')";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('Resister successful')</script>";
  }
  else{
    echo "inserted error";
  }
}
// else{
//   echo "<script>alert('filllll');</script>";
// }
// }

?>