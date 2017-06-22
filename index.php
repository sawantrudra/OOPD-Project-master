<?php
session_start();
    unset($_SESSION);
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


<body align="center">
    <h1>WELCOME</h1>
        <h3>Login as</h3>
            <div class="container">
                    <a href="admin_login.php" class="btn btn-info" role="button">Administrator</a>
                     <a href="teach_login.php" class="btn btn-info" role="button">Teacher</a>     
        
</body>

</html>
