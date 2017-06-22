<?php 
session_start();
$admin_id= $_SESSION['admin_id'];
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
      <li ><a href="admin_home.php">Home</a></li>
      
      <li><a href="admin_query.php">Queries</a></li>
         
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
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
$query = "SELECT id, username  FROM teacher  where 1";

 echo "<h2>List of teachers:</h2><br>";
$r= mysqli_query($conn,$query) or die('Error, query1 failed'); 
       
        $r1 = mysqli_num_rows($r);
while($id= mysqli_fetch_array($r)){
    ?><h4>
    <a href="teach_status.php?id=<?php echo $id[0];?>"> <?php echo $id[1];?></a></h4><?php
    $query1 = "SELECT approval FROM teacher where id= $id[0]";
$r1= mysqli_query($conn,$query1) or die('Error, query1 failed'); 
    $d= mysqli_fetch_array($r1);
    $query11 = "SELECT status FROM teacher where id = $id[0]; ";
$result11 = mysqli_query($conn,$query11) or die('Error, query1 failed');
    list($n12) = mysqli_fetch_array($result11);
    if($n12 == 83)
        echo "All required documents successfully submitted!";
    else
        echo (83- $n12)." required documents not yet submitted.";
    if($d[0] == 0){?>
    <h6>
        <a href="teach_approve.php?id=<?php echo $id[0];?>"> Approve !!</a><br><br></h6><?php
}}
   ?>
        </div>
    </body>
</html>