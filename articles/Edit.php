
           <?php
           $host="localhost";
           $user="root";
           $password="";
           $db_name="law_office";
           $connection=mysqli_connect($host,$user,$password,$db_name);
           $edit_id=$_GET["edit"];
            $edit="SELECT * FROM articles WHERE id=$edit_id;";
            $rows=mysqli_query($connection,$edit);
            $row=mysqli_fetch_array($rows);
            if(isset($_POST["Update"])){
                $art_title=$_POST["art_title"];
                $art_des=$_POST["art_des"];
                if (empty($_FILES['art_img']['name'])) {
                    $art_img = $row['image'];
                } else {
                    $art_img=time().$_FILES['art_img']['name'];
                    $art_TmpName=$_FILES['art_img']['tmp_name'];
                    $location="../uploads/$art_img";
                    move_uploaded_file($art_TmpName,$location);
                }
                $update="UPDATE articles set `title` = '$art_title', `description` = '$art_des',
                `image`='$art_img'WHERE id=$edit_id;";
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
                <label for="exampleInputEmail1">aricle title</label>
                <input type="text" name="art_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $row['title']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">article image</label>
                <input type="file" name="art_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">article description</label>
                <input type="text" name="art_des" class="form-control" id="exampleInputPassword1" value="<?= $row['description']?>">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="Update" value=<?php "$edit_id";?>>Update</button>
           </form>
<?php 
include '../shared/footer.php';

?>