
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           $edit_id=$_GET["edit"];
            $edit="SELECT * FROM admin WHERE id=$edit_id;";
            $rows=mysqli_query($connection,$edit);
            $row=mysqli_fetch_array($rows);
            if(isset($_POST["Update"])){
                $name=$_POST["name"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                $address=$_POST["address"];
                $age=$_POST["age"];
                $phone=$_POST["phone"];
                $role=$_POST["role"];
                if (empty($_FILES['image']['name'])) {
                    $image = $row['image'];
                } else {
                    $image=time().$_FILES['image']['name'];
                    $image_TmpName=$_FILES['image']['tmp_name'];
                    $location="../uploads/$image";
                    move_uploaded_file($image_TmpName,$location);
                }
                $update="UPDATE admin set name = '$name',image='$image',email = '$email',password = '$password'
                 ,address='$address',age='$age',phone='$phone',role='$role' 
                  WHERE id=$edit_id;";
                mysqli_query($connection,$update);
            }
           include '../shared/header.php'
           ?>
               <?php
    if(isset($_POST['Update'])){
        echo"<div class=\"alert alert-success\" role=\"alert\">
                    <h4 class=\"alert-heading\">Well done!</h4> </div>";
    }
    ?>
           <div class="form-group">
           <form method="POST" enctype="multipart/form-data">
           <img width="100" class="rounded mx-auto d-block" src="../uploads/<?= $row['image']?>">
            <div class="form-group">
            <label for="exampleInputEmail1">admin name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['name'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin email</label>
                <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['email'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin password</label>
                <input type="name" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['password'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin address</label>
                <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['address'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['age'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin phone</label>
                <input type="name" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['phone'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin role</label>
                <input type="text" name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"<?php 
                $value=$row['role'];
                echo"value=\"$value\"";?> >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">admin image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="Update" value=<?php "$edit_id";?>>Update</button>
           </form>
<?php 
include '../shared/footer.php';

?>