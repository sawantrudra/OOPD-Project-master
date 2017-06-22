<?php
session_start();
$teach_id= $_SESSION['teach_id'];
include 'dbconnect.php';
	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
             $query = "SELECT code1 FROM upload where id=$id";
$result = mysqli_query($conn,$query) or die('Error, query1 failed');
            $ans= mysqli_fetch_array($result);
            if($ans[0] < 5 || $ans[0] > 9){ 
                $query1 = "SELECT status FROM teacher where id= $teach_id ";
$result1 = mysqli_query($conn,$query1) or die('Error, query1 failed');
    $ans1= mysqli_fetch_array($result1);
    $query3 = "update teacher set status= $ans1[0]-1 where id= $teach_id";
    mysqli_query($conn,$query3) or die('Error, query failed');
            }
$query = "delete FROM upload where id= $id";
$result = mysqli_query($conn,$query) or die('Error, query failed');
            mysqli_close($conn);
				     
            header('location:teach_profile.php');
        }
?>
