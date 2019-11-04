<?php
session_start();
include_once("../model/entity/user1.php");
include_once('header.php');
?>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<form action="index1.php" method="POST" name="form1" enctype="multipart/form-data">
        <table width="25%" >
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>    
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>




<?php


// connection



$user = unserialize($_SESSION["user"]);
if (isset($user))
    echo "Xin chào, tôi là " . $user->userName;


$servername = "localhost";
$database = "moi1";
$username =  $user->userName;
$pw =  $user->passWord;  

$conn = mysqli_connect($servername, 'root', '', $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);


// $sql = "select * from moi1 where username = '$username' and password = '$pw' ";
// $query = mysqli_query($conn,$sql);
// $num_rows = mysqli_num_rows($query);    


$results = mysqli_query($conn, "SELECT * FROM moi1 where username = '$username' and password = '$pw'");





//else
  //  header("location:login.php");



//include_once("login1.php");


if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $age = $_POST['phone'];
    $email = $_POST['email'];
        
    // checking empty fields
    
        //insert data to database

        $username1 = $user->userName;
       // $id = $user->userName;
        $password = $user->passWord;

       
       $id = '24';     
           
        $result1 = mysqli_query($conn, "INSERT INTO moi1(id, username, password, name, phone, email) VALUES('$id', '$username1', '$password' ,'$name','$age','$email')");
        
        //display success message
         
        header('Location:index1.php');    
        }
 
   
       
?>



</body>
</html>