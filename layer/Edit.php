
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           $edit_id=$_GET["edit"];
            $edit="SELECT * FROM lawyers WHERE id=$edit_id;";
            $rows=mysqli_query($connection,$edit);
            $row=mysqli_fetch_array($rows);
            if(isset($_POST["Update"])){
                $name=$_POST["name"];
                $salary=$_POST["salary"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                $address=$_POST["address"];
                $age=$_POST["age"];
                $yearEX=$_POST["yearEX"];
                $phone=$_POST["phone"];
                if (empty($_FILES['image']['name'])) {
                    $image = $row['image'];
                } else {
                    $image=time().$_FILES['image']['name'];
                    $image_TmpName=$_FILES['image']['tmp_name'];
                    $location="../uploads/$image";
                    move_uploaded_file($image_TmpName,$location);
                }
                $update="UPDATE lawyers set name = '$name', salary = $salary,
                image='$image',email = '$email',password = '$password'
                 ,address='$address',age='$age',yearEX='$yearEX',phone='$phone' 
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
            <label for="exampleInputEmail1">Lawyer name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['name'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer salary</label>
                <input type="salary" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['salary'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer email</label>
                <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['email'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer password</label>
                <input type="name" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['password'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer address</label>
                <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['address'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['age'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer phone</label>
                <input type="name" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['phone'];
                echo"value=\"$value\"";?>>
            </div>
            
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer year of Experience</label>
                <input type="name" name="yearEX" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                <?php 
                $value=$row['yearEX'];
                echo"value=\"$value\"";?>>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="Update" value=<?php "$edit_id";?>>Update</button>
           </form>
<?php 
include '../shared/footer.php';

?>