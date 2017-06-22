
<?php
 session_start();
?>
<html>
<?php
    if(isset($_SESSION['login']))
    {
        
        if($_SESSION['login'] == 0)
            echo "<script type= 'text/javascript'>alert('invalid login');</script>"; 
    }
        
?>
     <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
   <body >
    
    <div class="container">
  <h2>login</h2>
  <form action="teach_login_process.php" method= "POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control" name="username" id="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
        <a href="new_teach.php" class="btn btn-warning" role="button">New teacher</a>
</div>
    
  </body>

  
</html>

