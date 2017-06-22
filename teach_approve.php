<?php
	    include 'dbconnect.php';
	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
            
				     $query = "UPDATE teacher 
				             SET approval = 1 WHERE id = $id";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
            header("location: admin_home.php");
        }
?>