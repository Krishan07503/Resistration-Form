<?php
    include("connection.php");
    $id=$_GET['id'];

    $query="DELETE FROM STUDENT WHERE id='$id' ";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "<script>alert('data delete successful')</script>";

        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/registration%20form/display3.php">

        <?php
    }
    else{
        echo "failed deleted";
    }
?>