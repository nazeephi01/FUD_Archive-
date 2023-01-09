<?php session_start();?>
<?php include("includes/connection.php");
include("includes/functions.php");?>

<?php 
if(isset($_POST['id'])){
		$id = $_POST['id'];
		$_SESSION['editId'] = $id;
		$qr = "SELECT * FROM projects WHERE projectId = '$id'";
		$sql = mysql_query($qr);
		while ($project = mysql_fetch_assoc($sql)){?>
        <center>
        <form method="post" action="update.php">
		<table width="95%" border="0" cellspacing="10" cellpadding="7">
  <tr>
    <td width="17%"><b>Matric Number:</b></td>
    <td width="18%"><input type="text" required="required" value="<?php echo $project['MatricNo'];?>" name="idno"></td>
    <td width="21%"><b>Project Topic:</b></td>
    <td width="44%"><input type="text" required="required" value="<?php echo $project['ProjectTittle'];?>" name="tittle" ></td>
  </tr>
  <tr>
    <td><b>Project Aim:</b></td>
    <td colspan="3"><textarea cols="94" required="required" value="<?php echo html_entity_decode($project['ProjectAim']);?>" name="aim" > <?php echo html_entity_decode($project['ProjectAim']);?></textarea></td>
    
  </tr>
  <tr>
  	<td><b>Objectives:</b></td>
    <td colspan="3"><textarea cols="94" value="<?php echo html_entity_decode($project['ProjectObj']);?>" name="obj" required="required"><?php echo html_entity_decode($project['ProjectObj']);?></textarea></td>
    
  </tr>
   <tr>
    <td><b>Project Date:</b></td>
    <td><input type="text" value="<?php echo $project['ProjectYear'];?>" name="year" required="required"></td>
    <td><b>Supervisor:</b></td>
    <td><select id="unit" name="supervisor" required="required">
                    <option value="">Select Supervisor</option>
                        <?php
							$dept = $_SESSION['title']; 
                            $qr = "SELECT * FROM supervisors WHERE Department = '$dept'";
                            $sql = mysql_query($qr);
							Confirm_query($sql, "failed to insert new dept", "" );
                            if ($sql)
                            {	
                                while ($unit  = mysql_fetch_assoc($sql)){
                                
                        ?>
                                <option value='<?php echo $unit['Tittle'] . " " . $unit['Fullname']; ?>'>
								<?php echo $unit['Tittle'] . " " . $unit['Fullname']; ?>
                                </option> 
                                    
                        <?php }} ?>
                    </select>
       </td>
  </tr>
   <tr>
    
    
  </tr>
  <tr>  <td colspan="3" align="center"><center><input type="submit" class="sButton" name="updateProject" value="Update" /></center></td></tr>
</table>
</form>
	</center>
		
		
		<?php	}			
				
				
  } ?>
 
 <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">