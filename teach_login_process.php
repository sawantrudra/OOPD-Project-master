<?php
session_start();
if(isset($_POST)){
   include "dbconnect.php";
  
   
         
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM teacher WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
    
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
    
         $_SESSION['teach_id'] = $row[0];
         $_SESSION['login'] = 1;       

         header("location: teach_home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
          $_SESSION['login'] = 0;
           
    
     header("location: teach_login.php");
   }
}
?>