
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           if(isset($_POST["insert"])){
            $art_title=$_POST["art_title"];
            $art_des=$_POST["art_des"];
            $art_img=time().$_FILES['art_img']['name'];
            $art_TmpName=$_FILES['art_img']['tmp_name'];
            $location="../uploads/$art_img";
            move_uploaded_file($art_TmpName,$location);
            $insert="INSERT INTO articles VALUES(null,'$art_title',\"$art_des\",null,'$art_img',null,null);";
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
           <form method="POST" enctype="multipart/form-data">
           <div class="form-group">
                <label for="exampleInputEmail1">aricle title</label>
                <input type="text" name="art_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">article image</label>
                <input type="file" name="art_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">article description</label>
                <input type="text" name="art_des" class="form-control" id="exampleInputPassword1">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="insert">Insert</button>
           </form>
            
<?php 
include '../shared/footer.php';

?>