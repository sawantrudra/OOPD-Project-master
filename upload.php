
<html>
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
    <input type="hidden" name="i" value="<?php echo $i1;?>" >
    <input type="hidden" name="j" value="<?php echo $j1;?>" >
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
</html>
<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{

$i1=$_POST['i'];
    $j1= $_POST['j'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

include "dbconnect.php";
   
if(($i1 > 4) && ($i1 < 10)){ 
    
    $query = "INSERT INTO upload (name, size, type, content, teach_id,code1 ,code2 ) VALUES ('$fileName', '$fileSize', '$fileType', '$content',$teach_id,$i1,$j1)";
$rew= mysqli_query($conn,$query) or die('Error, query failed'); 
    
}
    else{
         $query = "SELECT id FROM upload where teach_id = $teach_id and code1 = $i1 and code2 = $j1";
$result = mysqli_query($conn,$query) or die('Error, query1 failed');
if(mysqli_num_rows($result) == 0)
{

     
    $query1 = "SELECT status FROM teacher where id = $teach_id ";
$result1 = mysqli_query($conn,$query1) or die('Error, query1 failed');
    list($n12) = mysqli_fetch_array($result1);
   
    
    $query3 = " UPDATE teacher SET status = $n12 +1   WHERE id = $teach_id";
    $REWQ= mysqli_query($conn,$query3) or die('Error, query failed'); 
    echo "<script type='text/javascript'> alert('".$n12." ".$teach_id." ".$REWQ."'); </script>";
$query4 = "INSERT INTO upload (name, size, type, content, teach_id,code1 ,code2 ) VALUES ('$fileName', '$fileSize', '$fileType', '$content',$teach_id,$i1,$j1)";
    $REWQQ= mysqli_query($conn,$query4) or die('Error, query failed'); 
}
    else
    {
        $query5 = "update upload set name='$fileName', size= '$fileSize', type= '$fileType' , content= '$content' where  teach_id= $teach_id and code1= $i1 and code2= $j1 ";
        $REWQQQ= mysqli_query($conn,$query5) or die('Error, query failed'); 
    }
}
    
 echo "<script type='text/javascript'> alert('file uploaded'); </script>";
    unset($_POST['upload']);
} 
?>