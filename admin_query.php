<?php
session_start();
include 'dbconnect.php';
 ?>
<html>
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
          <p class="navbar-brand" >Welcome!</p>
      <li ><a href="teach_home.php">Home</a></li>
      
      
         <li><a href="admin_query.php">Queries</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text"></p></li>
    
      <li>
<a href="index.php" align="right" >
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </li>
    </ul>
      
    
  </div>
</nav><h4> Queries:</h4><br>
     
<?php
    $query = "SELECT id,quest,username from teacher  WHERE q1 = 0";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
    while($r=mysqli_fetch_array($result)){
    ?>
        <div align="center">
    
    <p><?php echo $r[2]."::".$r[1];?></p><br>
            <form action="?id=<?php echo r[0];?>" method="get" align="center">
            <h4>Answer the query:</h4>
        <input type="text" name="comment" placeholder="type your answer here">
        <input type="submit" value="submit"></form>
    
            <p><?php echo $r[0];?></p><br></div>
        <?php } ?>
    </body>
</html>
<?php
	    
	    if (isset($_GET['comment'])) 
	           {
				    $id= $_GET('id');
             $id1 = mysqli_real_escape_string($conn,$_GET['comment']);
				     $query = "update teacher set ans = '$id1' , q1= 1 WHERE id = $id";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
				     
				//  header("location:admin_query.php");  
	           }
	       ?>