<?php
session_start();
	    include 'dbconnect.php';
	    if (isset($_GET['comment'])) 
	           {
				     $id = $_SESSION['teach_id'];
             $id1 = mysqli_real_escape_string($conn,$_GET['comment']);
				     $query = "update teacher set admin_comments = '$id1' WHERE id = '$id'";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
				     
				     mysqli_close($conn);
            
				     header("location: teach_status.php");
	           }
	       ?>