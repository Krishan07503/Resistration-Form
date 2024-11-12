<?php
session_start();
echo "wlecome : &nbsp;".$_SESSION['user_name'];
?>

<html>
<head>
    <title>display</title>
    <style>
        body{
            background-color:#d071f9;
        }
        table{
            background-color:white;
        }
        .update{
            background-color:green;
            color:white;
            width: 100px;
            margin-left:45px;
            cursor: pointer;
        }
        .delete{
            background-color:red;
            color:white;
            width: 100px;
            margin-left:45px;
            margin-top:5px;
            cursor: pointer;
            
        }
    </style>
</head>


<?php
error_reporting(0);
include("connection.php");

$userporfile=$_SESSION['user_name'];
if($userporfile==true){

}
else{
    header('location:login6.php');

}

$query="SELECT * FROM STUDENT";
$data=mysqli_query($conn,$query);

//mysqli_num_rows(foldername) is use for get the number of rows inside of database
$total= mysqli_num_rows($data);


// echo $total;

if($total!=0){

    ?>
    
    <center><table border="2" cellspacing="8" width="100%">
        <caption><h2><mark>display all records</mark></h2></caption>
        <tr>
        <th width="5%">id</th>
        <th width="6%">image </th>
        <th width="8%">first name</th>
        <th width="8%">last name</th>
        <th width="10%">password </th>
        <th width="6%">gender </th>
        <th width="12%">email </th>
        <th width="8%">phone </th>
        <th width="5%">caste </th>
        <th width="10%">language </th>
        <th width="10%">address </th>
        <th width="12%">operation </th>
        </tr>
    

    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo " <tr>
        <td>".$result['id']."</td>


        <td><img src=' ".$result['std_img']." ' width='100px' height='100px'></td>


        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['pwd']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['caste']."</td>
        <td>".$result['language']."</td>
        <td>".$result['address']."</td>
        <td><a href='update_design4.php?id=$result[id]'>
        <input type='submit' value='update' class='update'>
        </a>
        <a href='delete5.php?id=$result[id]'>
        <input type='submit' value='delete' class='Delete' onclick=' return cdelete()'>
        </a></td>


        </tr> ";
    }
    // echo "table has records";
}
else{
    echo "table has no records";

}
?>
</table>
</center>

<a href="logout7.php"><input type="submit" value="logout" style="background-color: blue;color:white;height:35px;width:100px;margin-top:20px;font-size:20px;border-radius:5px;cursor:pointer"></a>

<script>
    function cdelete(){
        return confirm("are you sure to delete");
    }
</script>

</html>



<!-- echo $result['fname']." ".$result['lname']." ".$result['pwd']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address']."<br>"; -->
