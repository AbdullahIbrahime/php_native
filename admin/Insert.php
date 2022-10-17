
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           if(isset($_POST["insert"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $age=$_POST["age"];
            $phone=$_POST["phone"];
            $role=$_POST["role"];
            $image=time().$_FILES['image']['name'];
            $image_TmpName=$_FILES['image']['tmp_name'];
            $location="../uploads/$image";
            move_uploaded_file($image_TmpName,$location);
            $insert="INSERT INTO admin VALUES(null,'$name','$age','$address'
            ,'$phone','$email','$password','$image',\"$role\");";
            mysqli_query($connection,$insert);
        }
           include '../shared/header.php'
           ?>
               <?php
    if(isset($_POST['insert'])){
        echo"<div class=\"alert alert-success\" role=\"alert\">
                    <h4 class=\"alert-heading\">Well done!</h4> </div>";
    }
    ?>
            <div class="form-group">
           <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label for="exampleInputEmail1">admin name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin email</label>
                <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin password</label>
                <input type="name" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin address</label>
                <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin phone</label>
                <input type="name" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            
            <div class="form-group">
            <label for="exampleInputEmail1">admin role</label>
                <input type="text" name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="insert">Insert</button>
           </form>
            
<?php 
include '../shared/footer.php';

?>