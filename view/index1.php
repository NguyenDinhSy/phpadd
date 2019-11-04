<?php 
session_start();
include_once("../model/entity/user1.php");
//include_once("login1.php");
include_once('header.php');
include_once('nav.php');
$servername = "localhost";
$database = "moi1";



// SESSION
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	
	
		// $username =  $user->userName;
		// $pw =  $user->passWord;  
        $userName = $_POST["username"];
		$pw = $_POST["pw"];
		
		// $_SESSION['id'] = $_POST['id'];
		// $_SESSION['username'] = $_POST['username'];
		// $_SESSION['password'] = $_POST['password'];
		// $_SESSION['name'] = $_POST['name'];

		// $_SESSION['phone'] = $_POST['phone'];

		// $_SESSION['email'] = $_POST['email'];


        
        $user = user1::authentication($userName, $pw);
        
        if ($user == null)
            $information = "Tên đăng nhập hoặc mật khẩu không đúng";
        else {
			$_SESSION["user"] = serialize($user);
			echo $_SESSION["user"];
            //header("location:index.php");
        }
    }   


	
	$user = unserialize($_SESSION["user"]);
	
						
?>


<?php

$conn = mysqli_connect($servername, 'root', '', $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);


// $sql = "select * from moi1 where username = '$username' and password = '$pw' ";
// $query = mysqli_query($conn,$sql);
// $num_rows = mysqli_num_rows($query);    
//header('Location: index1.php');
// $username = $_POST['username'];
// $pw =  $_POST['pw'];  

$username =  $user->userName;
$pw =  $user->passWord;  
$results = mysqli_query($conn, "SELECT * FROM moi1 where username = '$username' and password = '$pw'");


	// $_SESSION['user'] = $_POST['username'];
	// $user= $_SESSION['user'];
	// $ss = $_POST['username'];
	

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--    boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .c{
            align-content: center;
        }
    </style>
    <!--    jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<button name='add' ><a href='add.php'> Add Data</a></button>
<div class="container-fluid">
<div class="table-responsive">
<table class="table table-hover table-bordered">
	<thead class="thead-dark">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Phone</th>
            <th>Email</th>
			<th colspan="1">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</div>
</div>

</body>
</html>