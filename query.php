<?php
session_start();
include 'dbconnect.php';
 $id= $_SESSION['teach_id'];?>
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
</nav>
     <form action="" method="get" align="center">
            <h4>Enter a Query:</h4>
        <input type="text" name="comment" placeholder="type your message here">
        <input type="submit" value="submit"></form>
<?php
    $query = "SELECT quest,ans from teacher  WHERE id = '$id'";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
    $r= mysqli_fetch_array($result);
    ?>
        <div align="center">
    <h4>Previous Queries:</h4><br>
    <p><?php echo $r[0];?></p><br>
    <h4>Answers:</h4><br>
            <p><?php echo $r[0];?></p><br></div>
    </body>
</html>
<?php
	    
	    if (isset($_GET['comment'])) 
	           {
				     $id = $_SESSION['teach_id'];
             $id1 = mysqli_real_escape_string($conn,$_GET['comment']);
				     $query = "update teacher set quest = '$id1', q1 = 0 WHERE id = '$id'";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
				     
				     mysqli_close($conn);
            
				     header("location: teach_status.php");
	           }
	       ?>