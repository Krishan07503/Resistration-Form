<?php
    error_reporting(0);
    include('connection.php');
    
   
    session_start();
  

    $id=$_GET['id'];
    // echo $id;

    $userporfile=$_SESSION['user_name'];
    if($userporfile==true){
    }
    else{
      header('location:login6.php');

    }

    $query="SELECT * FROM STUDENT WHERE id=$id";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);

    $language=$result['language'];
    $language1=explode(",",$language);

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>update student </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form class="row g-3" action="#" method="post">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">first name</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $result['fname']; ?>" required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">last name</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $result['lname']; ?>" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password"
          value="<?php echo $result['pwd']; ?>" required>
      </div>

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">gender</label>
        <select name="gender" required>
          <option value="">select</option>

          <option value="male" <?php if($result['gender']=='male' ){ echo "selected" ; } ?>
            >male</option>
          <option value="female" <?php if($result['gender']=='female' ){ echo "selected" ; } ?>
            >female</option>
        </select>
      </div>


      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $result['email']; ?>"
          required>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">phone number</label>
        <input type="text" class="form-control" id="inputEmail4" name="phone" value="<?php echo $result['phone']; ?>"
          required>
      </div>


      <div class="col-md-6">
        <label for="inputEmail4" class="form-label" style="margin:30px"> caste</label>
        <input type="radio" name="caste" value="general" required <?php if($result['caste']=='general' ){ echo "checked"
          ; } ?>
        >genreal

        <input type="radio" name="caste" value="obc" required <?php if($result['caste']=='obc' ){ echo "checked" ; } ?>
        >obc

        <input type="radio" name="caste" value="sc" required <?php if($result['caste']=='sc' ){ echo "checked" ; } ?>
        >sc

        <input type="radio" name="caste" value="st" required <?php if($result['caste']=='st' ){ echo "checked" ; } ?>
        >st
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label" style="margin:30px"> language</label>
        <input type="checkbox" name="language[]" value="hindi" <?php if(in_array("hindi",$language1)){ echo "checked" ;
          } ?>
        >hindi
        <input type="checkbox" name="language[]" value="english" <?php if(in_array("english",$language1)){
          echo "checked" ; } ?>
        >english

        <input type="checkbox" name="language[]" value="spanish" <?php if(in_array("spanish",$language1)){
          echo "checked" ; } ?>
        >spanish
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="textarea" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"
          value="<?php echo $result['address']; ?>" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
  </div>
  <input type="submit" value="update" class="btn btn-success" name="update">

  </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>

<?php

if($_POST["update"]){

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $pwd=$_POST["password"];
  $gender=$_POST["gender"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $caste=$_POST["caste"];

  $language=$_POST["language"];
  $language1=implode(",",$language);

  $address=$_POST["address"];

  // if($fname !="" && $lname !="" && $pwd !="" && $gender !="" && $email !="" && $phone !="" && $address !=""){

  

//   $query="INSERT INTO STUDENT(fname,lname,pwd,gender,email,phone,address) VALUES('$fname','$lname','$pwd','$gender','$email','$phone','$address')";

  $query="UPDATE STUDENT SET fname='$fname',lname='$lname',pwd='$pwd',gender='$gender',email='$email',phone='$phone',caste='$caste',language='$language1',address='$address' WHERE id='$id' ";
  $data=mysqli_query($conn,$query);
  if($data){
    echo " <script>alert('update successful')</script>";

    ?>

<meta http-equiv="refresh" content="0; url=http://localhost/registration%20form/display3.php">

<?php

  }
  else{
    echo "record error";
  }
}
// else{
//   echo "<script>alert('filllll');</script>";
// }
// }

?>