 <?php
 include "dbconnect.php";
 $query1 = " SELECT `status` FROM `teacher` where `id` = 18 ";
$result1 = mysqli_query($conn,$query1) or die('Error, query1 failed');
    $annnn = mysqli_fetch_array($result1,MYSQLI_NUM);
   echo $annnn[0];
   ?>