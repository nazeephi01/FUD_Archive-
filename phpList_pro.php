<?php session_start(); ?>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="admin_listTitle"> &nbsp;</div><br />
<div class="scroll">
<center><?php include("includes/connection.php");
				include("includes/functions.php");
		?>
<?php if(isset($_POST['skul'])){ 
$skul = $_POST['skul']; ?>
<p><h3>List of Registered Depatments in <?php echo $skul; ?> </h3><br /></p>
<table cellpadding="8" cellspacing="5" border="1" id="tbl_adminlist" width="80%">
        	<tr>
            	<th width="5%">S/N</th><th width="13%">Department</th>
                
            </tr>
<?php

		$qr = "SELECT * FROM departments WHERE SchoolName = '$skul'";		
		$sql = mysql_query($qr);
		Confirm_query($sql,"fail to get list of student", "");
		 while ($adminList  = mysql_fetch_assoc($sql)){
			 $sn += 1;
			
			 ?>
		<tr>
        	<td><?php echo $sn; ?></td>	
            <td align="center"><?php echo $adminList['DeptName'];?></td>
           
            
                
        </tr>         	
			
			<?php } ?>
          </table>	
   <?php 
}
?>
</center></div>