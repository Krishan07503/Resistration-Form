<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #main {
            margin-top: 100px;
            width: 50%;
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <div class="container" id="main">
        <form action="#" method="POST" autocomplete="off">
            <center>
                <h1>Login Page</h1>
            </center>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="email" name="username" class="form-control" placeholder="user name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" >
                </div><br><br>
                <center><a href="#">Forget Password?</a></center><br>
                <input type="submit" name="login" class="btn btn-primary" value="login" class="form-control" id="inputPassword"><br>
                <center><h5>New Member?<a href="index.php">SignUp Here</a></h5></center>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
   include("connection.php");

   if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $query="SELECT * FROM student WHERE email='$username' && pwd='$password' ";
    $data=mysqli_query($conn,$query);

    $total=mysqli_num_rows($data);
    // echo $total;

    if($total==1){
        // echo "login successful";
        // <meta http-equiv="refresh" content="0; url=http://localhost/crud/display3.php">

        // $_SESSION['user_name']=$username;
        // header('location:display3.php');

        $_SESSION['user_name']=$username;
        header("location:display3.php");
        
       
    }
    else{
        echo "<script> alert('Username and Password is not valid') </script>";
    }





   }
?>