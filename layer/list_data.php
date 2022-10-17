<?php
$host="localhost";
$user="root";
$password="";
$db_name="law_office";
$connection=mysqli_connect($host,$user,$password,$db_name);
$selection="SELECT * FROM lawyers;";
$data=mysqli_query($connection,$selection);
session_start();
print_r($_SESSION);
include '../shared/header.php'
?>
<form method="POST" >
<?php while($rows=mysqli_fetch_array($data)) {?>
<div class="card bg-dark text-white" style="width: 18rem;">
  <img class="card-img-top" src="../uploads/<?=$rows['image']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo"Name : ". $rows["name"]?></h5>
    <p class="card-text"><?php echo"Address : ". $rows['address']?></p>
    <p class="card-text"><?php echo"Salary : ". $rows['salary']?></p>
    <p class="card-text"><?php echo"Age : ". $rows['age']?></p>
    <p class="card-text"><?php echo"Year EX : ". $rows['yearEX']?></p>
    <p class="card-text"><?php echo"Phone : ". $rows['phone']?></p>
    <p class="card-text"><?php echo"Email : ". $rows['email']?></p>
    <a name="edit" href="./Edit.php?edit=<?=$rows['id']?>" class="btn btn-primary" value=<?php echo $rows['id']?>>Edit</a>
  </div>
</div>
</form>
<?php
}
include './shared/footer.php';
?>