<?php session_start();?>
<?php include("includes/connection.php");
include("includes/functions.php");?>
 <?php if(isset($_POST['updateProject'])){
	 
  		$id = $_SESSION['editId'];
		$idno = mysql_real_escape_string(htmlentities($_POST['idno']));
		$year = mysql_real_escape_string(htmlentities($_POST['year']));
		$supervisorId = mysql_real_escape_string(htmlentities($_POST['supervisor']));
		$title = mysql_real_escape_string(htmlentities($_POST['tittle']));
		$aim = mysql_real_escape_string(htmlentities($_POST['aim']));
		$obj = mysql_real_escape_string(htmlentities(nl2br($_POST['obj'])));
		$department = $_SESSION['title'];
		 	
		
		$qr = "UPDATE projects SET MatricNo = '$idno', ProjectTittle =  '$title', ProjectYear = '$year', ProjectAim = '$aim', ProjectObj = '$obj',  ProjectSupervisor = '$supervisorId', Department = '$department' WHERE projectId = '$id'";
		//$sql = mysql_query($qr);
		$result = mysql_query($qr);
 if (!$result){
 die('Could not upload file: ' . mysql_error());
 }
 header("location: deptAdmin.php?archives");
  }
 ?>

 <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">