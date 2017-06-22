<?php 
session_start();
$admin_id= $_SESSION['admin_id'];
include 'dbconnect.php';
?><?php
	    
	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
                 $_SESSION['teach_id']=$id;
               }
       $id= $_SESSION['teach_id'];
				     $query = "SELECT `id`, `email`, `username`, `dept` FROM teacher WHERE id = $id";
				     $result = mysqli_query($conn,$query) or die('Error, query failed');
            $row = mysqli_fetch_array($result);
                $query22 = "select submit from teacher WHERE id = '$id'";
				     $result22 = mysqli_query($conn,$query22) or die('Error, query failed');
                $app= mysqli_fetch_array($result22);
            ?>

<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
          <p class="navbar-brand" >Welcome!</p>
      <li ><a href="admin_home.php">Home</a></li>
      
      <li><a href="admin_queries.php">Queries</a></li>
         
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
      <li>
<a href="index.php" align="right" >
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </li>
    </ul>
      
    
  </div>
        </nav>  
      
    
        <div class="container">
        <form action="admin_message.php" method="get">
            <h4>Send a comment:</h4>
        <input type="text" name="comment" placeholder="type your message here">
        <input type="submit" value="submit"></form>
        
            <?php if($app[0]==0){?>
            <a type="button" class="btn btn-warning btn-lg" align= "right" href="admin_sub_approve.php?id=<?php echo $id;?>"> Approve teacher!</a> <br><?php
            }
            else{?>
            <h4>All documents successfully submited and Approved</h4><?php
            }?>
  <h2>Teacher Details:</h2>
              
  <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td>Name</td>
        <td><?php echo $row[2];?></td>
        
        </tr>
        <tr>
        <td>Department</td>
        <td><?php echo $row[3];?></td>
        
        </tr>
        <tr>
        <td>Email</td>
        <td><?php echo $row[1];?></td>
        
        </tr>
      
    
 </tbody>
  </table>
</div>
 

  <?php
    
    $teach_id= $id;
    $cf= array("1. Cover Page","2. Syllabus copy","3. Vision of the Department","4. Mission of the Department", 
                "5. Programme educational objectives","6. Programme Outcomes","7. Course Objectives and Course Outcomes",
                "8. Brief notes on the importance of the course and how it fits into the curriculum","9. Prerequisites",  
                "10. Course mapping with PEOs and POs","11. Course Macro plan","12. Schedule of Instructions (Micro Plan)",
                "13. Course and Class Time Table","14. Brief Course notes");
    $cf1= array("0","0","0","0","0","0","0","0","0","0","0","0","0","0");

    $pcoj =array("copy1","copy2");
    $pcoj1= array("0","0");
    $itb= array("best1","best2","average1","average2","least1","least2");
    $itb1= array("0","0","0","0","0","0");
    for($k=0;$k<30;$k++){
        $ff[$k] = "form".($k+1);
        $ff1[$k]="0";
    }
    $ra= array("internal","semester");
    $ra1=array("0","0");
    $pp= array("Journals at National and International level","Conferences at National and International level");
    $li= array("Course File","Physical copies of Journals","Internal Test Books","Feedback Forms","Result Analysis",
                "Courses-Attended","Courses-Conducted","Papers published","Achievements","Awards","Misc",
                "Pay Slip","Order");
    $li1= array("0","0","0","0","0","0","0","0","0","0","0","0","0");
    
  for($x=0;$x<13;$x++){
   ?>
    <h2 align="center"><button type="button" class="btn btn-info" data-toggle="collapse"  data-target=<?php echo "#".$li[$x]; ?> ><?php echo $li[$x]; ?></button>
 </h2> 
    <?php
     if($x==0){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
    for($j=0;$j<14;$j++){?>
    <p><?php echo $cf[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
                         include "down1.php";?></div><div class="col-sm-6" align="center"> </div></div>
    <?php
        
    }
        ?></div><?php
     }
       elseif($x==1){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
    for($j=0;$j<2;$j++){?>
    <p><?php echo $pcoj[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
        include "down1.php";?></div><div class="col-sm-6" align="center"> </div></div> 
    <?php
    }
        ?></div><?php   
     }
      elseif($x==2){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
    for($j=0;$j<6;$j++){?>
    <p><?php echo $itb[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
        include "down1.php"; ?></div><div class="col-sm-6" align="center"></div></div>
    <?php
    }  ?></div><?php
     }
    elseif($x==3){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
             
    for($j=0;$j<30;$j++){?>
    <p><?php echo $ff[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
        include "down1.php";?></div><div class="col-sm-6" align="center"></div></div> 
    <?php
    }  ?></div><?php
     }
        elseif($x==4){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
    for($j=0;$j<2;$j++){?>
    <p><?php echo $ra[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
        include "down.php";?></div><div class="col-sm-6" align="center"></div></div>
    <?php
    }  ?></div><?php
     }
        elseif($x==7){?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
    for($j=0;$j<2;$j++){?>
    <p><?php echo $pp[$j]; ?><div class="row"><div class="col-sm-6" align="center"><?php
        include "down1.php";?></div><div class="col-sm-6" align="center"></div></div> 
    <?php
    }  ?></div><?php
        }
            else{?><div id= <?php echo $li[$x]; ?> class="collapse" align="center"><?php
                $j=500; ?><div class="row"><div class="col-sm-6" align="center"><?php
                 include "down1.php";?></div><div class="col-sm-6" align="center">
        </div></div><?php
                 
            }
        ?></div><?php
    }
    ?>
        </tbody>
  </table>
</div>
   </body>
       
</html>