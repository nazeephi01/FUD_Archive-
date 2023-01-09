<?php session_start();?>
<?php include("includes/connection.php");?>
<?php 
if(isset($_POST['id'])){
		$id = $_POST['id'];
		$qr = "SELECT * FROM projects WHERE projectId = '$id'";
		$sql = mysql_query($qr);
		while ($project = mysql_fetch_assoc($sql)){?>
        <center>
		<table width="95%" border="0" cellspacing="10" cellpadding="7">
  <tr>
    <td width="17%"><b>Matric Number:</b></td>
    <td width="18%"><?php echo $project['MatricNo'];?></td>
    <td width="21%"><b>Project Topic:</b></td>
    <td width="44%"><?php echo $project['ProjectTittle'];?></td>
  </tr>
  <tr>
    <td><b>Project Aim:</b></td>
    <td colspan="3"><?php echo html_entity_decode($project['ProjectAim']);?></td>
    
  </tr>
  <tr>
  	<td><b>Abstract:</b></td>
    <td colspan="3"><?php echo html_entity_decode($project['ProjectObj']);?></td>
  </tr>
   <tr>
    <td><b>Project Date:</b></td>
    <td><?php echo $project['ProjectYear'];?></td>
    <td><b>Supervisor:</b></td>
    <td><?php echo $project['ProjectSupervisor'];?></td>
  </tr>
   <tr>
    <td><b>Download link:</b></td>
    <td colspan="3" align="center"><a href="../projects/<?php echo $project['ProjectMain'];?>"><?php echo $project['ProjectMain'];?></a></td>
    
  </tr>
</table>

	</center>
		
		
		<?php	}			
				
				
  } ?>

  <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">