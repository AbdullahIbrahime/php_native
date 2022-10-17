
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           if(isset($_POST["insert"])){
            $name=$_POST["name"];
            $salary=$_POST["salary"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $age=$_POST["age"];
            $yearEX=$_POST["yearEX"];
            $phone=$_POST["phone"];
            $image=time().$_FILES['image']['name'];
            $image_TmpName=$_FILES['image']['tmp_name'];
            $location="../uploads/$image";
            move_uploaded_file($image_TmpName,$location);
            $insert="INSERT INTO lawyers VALUES(null,'$age','$address','$salary'
            ,'$yearEX','$phone','$email','$password','$image','$name');";
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
            <label for="exampleInputEmail1">Lawyer name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer salary</label>
                <input type="salary" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer email</label>
                <input type="name" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer password</label>
                <input type="name" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer address</label>
                <input type="name" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer phone</label>
                <input type="name" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer year of Experience</label>
                <input type="name" name="yearEX" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Lawyer image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="insert">Insert</button>
           </form>
            
<?php 
include '../shared/footer.php';

?>