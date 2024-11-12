<?php
    // error_reporting(0);
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="responsiveform";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
        // echo "successful create";
    }
    else{
        echo "error something".mysqli_connect_error();
    }
?>
