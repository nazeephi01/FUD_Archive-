<?php session_start(); ?>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="admin_listTitle"></div>

          	
          
<div class="scroll">
<center><?php include("includes/connection.php");
				include("includes/functions.php");
				$dept = $_SESSION['title'];
		?>


<?php 

	if(isset($_POST['where'])){ 
 ?>

<table cellpadding="8" cellspacing="5" border="1" id="tbl_adminlist" width="98%">
        	<tr>
            	<th width="5%">S/N</th><th width="10%">Matric No.</th><th width="50%">Project Tittle</th><th width="18%">Supervisor</th>
                <th width="8%" colspan="2"> Actions </th>
            </tr>
<?php
		
			$qr = "SELECT * FROM projects WHERE Department = '$dept'";	
		
		$sql = mysql_query($qr);
		Confirm_query($sql,"fail to get list of projects", "");
		 while ($projectList  = mysql_fetch_assoc($sql)){
			 $sn += 1;
			
			 ?>
		<tr>
        	<td align="center"><?php echo $sn; ?></td>	
            <td align="center"><?php echo $projectList['MatricNo'];?></td>
           <td align="center"><?php echo $projectList['ProjectTittle'];?></td>
            <td align="center"><?php echo $projectList['ProjectSupervisor']; ?></td> 
             <td><a href="DeptAdmin.php?archives#" data-page="<?php echo $projectList['projectId']; ?>" class="details">Edit</a></td>     
              <td><a href="DeptAdmin.php?archives#" data-page="<?php echo $projectList['projectId']; ?>" class="details">Delete</a></td>     
        </tr>         	
			
			<?php } ?>
          </table>	
   <?php 
}
elseif (isset($_POST['title']))
{ 
 ?>

<table cellpadding="8" cellspacing="5" border="1" id="tbl_adminlist" width="98%">
        	<tr>
            	<th width="5%">S/N</th><th width="10%">Matric No.</th><th width="50%">Project Tittle</th><th width="18%">Supervisor</th>
                <th width="8%" colspan="2"> Actions </th>
            </tr>
<?php
			$titl = $_POST['title'];
			$qr = "SELECT * FROM projects WHERE ProjectTittle LIKE '%$titl%' AND Department = '$dept'";	
		
		$sql = mysql_query($qr);
		Confirm_query($sql,"fail to get list of projects", "");
		 while ($projectList  = mysql_fetch_assoc($sql)){
			 $sn += 1;
			
			 ?>
		<tr>
        	<td align="center"><?php echo $sn; ?></td>	
            <td align="center"><?php echo $projectList['MatricNo'];?></td>
           <td align="center"><?php echo $projectList['ProjectTittle'];?></td>
            <td align="center"><?php echo $projectList['ProjectSupervisor']; ?></td> 
            <td><a href="DeptAdmin.php?archives#" data-page="<?php echo $projectList['projectId']; ?>" class="details">Edit</a></td>     
              <td><a href="DeptAdmin.php?projectId=<?php echo $projectList['projectId']; ?>" data-page="<?php echo $projectList['projectId']; ?>" class="details">Delete</a></td>
        </tr>         	
			
			<?php } ?>
          </table>	
   <?php 
}

elseif (isset($_POST['obj']))
{ 
 ?>

<table cellpadding="8" cellspacing="5" border="1" id="tbl_adminlist" width="98%">
        	<tr>
            	<th width="5%">S/N</th><th width="10%">Matric No.</th><th width="50%">Project Tittle</th><th width="18%">Supervisor</th>
                <th width="8%" colspan="2"> Actions </th>
            </tr>
<?php
			$obj = $_POST['obj'];
			$qr = "SELECT * FROM projects WHERE ProjectObj LIKE '%$obj%' AND Department = '$dept'";	
		
		$sql = mysql_query($qr);
		Confirm_query($sql,"fail to get list of projects", "");
		 while ($projectList  = mysql_fetch_assoc($sql)){
			 $sn += 1;
			
			 ?>
		<tr>
        	<td align="center"><?php echo $sn; ?></td>	
            <td align="center"><?php echo $projectList['MatricNo'];?></td>
           <td align="center"><?php echo $projectList['ProjectTittle'];?></td>
            <td align="center"><?php echo $projectList['ProjectSupervisor']; ?></td> 
            <td><a href="DeptAdmin.php?archives#" data-page="<?php echo $projectList['projectId']; ?>" class="details">Edit</a></td>     
              <td><a href="DeptAdmin.php?archives#" data-page="<?php echo $projectList['projectId']; ?>" class="details">Delete</a></td>
        </tr>         	
			
			<?php } ?>
          </table>	
   <?php 
}
?>

</center></div>
