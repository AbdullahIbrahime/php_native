<?php
$host="localhost";
$user="root";
$password="";
$db_name="law_office";
$connection=mysqli_connect($host,$user,$password,$db_name);
$selection="SELECT * FROM articles;";
$data=mysqli_query($connection,$selection);
session_start();
include './shared/header.php'
?>
<form method="POST" >
<?php while($rows=mysqli_fetch_array($data)) {?>
<div class="card bg-dark text-white" style="width: 18rem;">
  <img class="card-img-top" src="./uploads/<?=$rows['image']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo"title : ". $rows["title"]?></h5>
    <p class="card-text"><?php echo"description : ". $rows['description']?></p>
    <p class="card-text"><?php echo"auther : ". $rows['auther']?></p>
    <p class="card-text"><?php echo"create_time : ". $rows['create_time']?></p>
    <a name="edit" href="./articles/Edit.php?edit=<?=$rows['id']?>" class="btn btn-primary" value=<?php echo $rows['id']?>>Edit</a>
  </div>
</div>
</form>
<?php
}
include './shared/footer.php';
?>