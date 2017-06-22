<?php
	    include 'dbconnect.php';
	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
				     $query = "update teacher set submit = 1 WHERE id = '$id'";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
				     
				     mysqli_close($conn);
            header("location: admin_home.php");
				     exit;
	           }
	       ?>