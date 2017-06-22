<?php
//error_reporting(E_ALL & ~E_NOTICE);
include "dbconnect.php";
?>
<html>
<form action="" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="dept">Department:</label>
    <input type="text" class="form-control" name="dept" id="dept">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <input type="submit" class="btn btn-default">
</form>
</html>
<?php
if(isset($_POST) )
{

    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $dept= mysqli_real_escape_string($conn,$_POST['dept']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $pwd=mysqli_real_escape_string($conn, $_POST['pwd']);


$query = "INSERT INTO teacher (username, dept, email, password ) VALUES ('$name', '$dept', '$email', '$pwd')";

$r= mysqli_query($conn,$query) or die('Error, query failed'); 
 echo "New teacher application submitted
 awaiting administrator approval.";
    unset($_POST);
    header('Location: teach_login.php');
    
} 
?>