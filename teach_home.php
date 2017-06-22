<?php 
session_start();
$teach_id= $_SESSION['teach_id'];
?>
<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
          <p class="navbar-brand" >Welcome!</p>
      <li ><a href="teach_home.php">Home</a></li>
      
      <li><a href="teach_profile.php">Submissions</a></li>
         <li><a href="query.php">Queries</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text"></p></li>
     <li ><a href="teach_edit_profile.php">Profile</a></li>
      <li>
<a href="index.php" align="right" >
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </li>
    </ul>
      
    
  </div>
</nav><div align="center">
        <?php
        include "dbconnect.php";
$query = "SELECT admin_comments FROM teacher  where id= $teach_id";


$r= mysqli_query($conn,$query) or die('Error, query1 failed'); 
while($r1 = mysqli_fetch_array($r))
    echo "<h2>Comments from Administrator:</h2><br>".$r1[0];
$query = "SELECT status FROM teacher  where id= $teach_id";

echo"<br><h2>Status of Submissions:</h2><br>";
$r= mysqli_query($conn,$query) or die('Error, query failed'); 
           $n= mysqli_fetch_array($r);
           if($n[0]== 0)
               echo "<div align='center'>Submissions pending!!</div>";
            else
                echo"<div align='center'>submissions completed!</div>";
 ?>
        </div>  
    </body>
</html>