
<html>
<head>
<title>Download File </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$query = "SELECT id, name FROM upload where teach_id= $teach_id and code1= $x and code2= $j";
$result = mysqli_query($conn,$query) or die('Error, query failed');
if(mysqli_num_rows($result) == 0)
{
echo "no file uploaded! <br>";
   
} 
else
{
while(list($id, $name) = mysqli_fetch_array($result))
{
?>
<a href="download.php?id=<?php echo $id;?>"> <?php echo $name;?></a> <br>
    
<?php 
}
}
?>
</body>
</html>