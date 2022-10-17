<?php
session_start();
// print_r($_SESSION);die;  


$host="localhost";
$user="root";
$password="";
$db_name="law_office";
$email="";
$password1="";
$connection=mysqli_connect($host,$user,$password,$db_name);
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password1 = $_POST["password"];
    $select = "SELECT * FROM admin where email ='$email' AND `password` = '$password1'";
    $data= mysqli_query($connection, $select);
    $numRows = mysqli_num_rows($data);
    $row = mysqli_fetch_array($data);
    $_SESSION['email']=$_POST['email'];
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/first_project/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="script" src="./server.php">
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
<h1 class="text-center">Login </h1>
<div class="container col-6">
    <div class="card card-password">
        <div class="card-body">
            <form method="POST" ACTION="index.php">
                <div class="form-group">
                    <label class="control-label text-dark">Email</span></label>
                    <input style="border:1px solid" class="form-control " type="text" name="email">
                </div>
                <div class="form-group">
                    <label class="control-label text-dark">Password</label>
                    <input style="border:1px solid" class="form-control" type="text" name="password">
                </div>
                <a href="./home.php" class="btn btn-primary">login</a>


            </form>
        </div>
    </div>
</div>
<script src="/first_project/bootstrap-4.6.2-dist/js/jquery.slim.min.js"></script>
        <script src="/first_project/bootstrap-4.6.2-dist/js/popper.min.js"></script>
        <script src="/first_project/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>