<?php 
session_start();
//include_once("login1.php");
include_once("../model/entity/user1.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
        $userName = $_POST["username"];
        $pw = $_POST["pw"];

        $user = user1::authentication($userName, $pw,$id);
        
        if ($user == null)
            $information = "Tên đăng nhập hoặc mật khẩu không đúng";
        else {
            $_SESSION["user"] = serialize($user);
            echo $_SESSION["user"];
            //header("location:index.php");
        }
    }   

?>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action='index1.php'>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                            <label for="inputEmail">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="pw" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="save">Login</button>
                    </div>
                  
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="signup.php">Register an Account</a>
                    <a class="d-block small" href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>