<!DOCTYPE html>
<html >
    <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script src="js/bootstrap.min.js"></script>
</head>
  
  <body >

    
    <div class="container">
  <h2>login</h2>
  <form action="admin_login_process.php" method="post">
    <div class="form-group">
      <label for="user">Email:</label>
      <input type="username" class="form-control" name="username" id="user" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    
  </body>
</html>
