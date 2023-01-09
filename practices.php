<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
-->
</style>
define("UPLOAD_DIR", "/xampp/htdocs/project_archive/projects/");



<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<?php session_start(); ?>
<?php 
		include("includes/connection.php");
		include("includes/functions.php");
?>
<?php 
	if(isset($_POST['addProject'])){
		//file upload
		
		$_SESSION['ok'] = "no";
 $e = "";
 //change to the original folder. define("UPLOAD_DIR", "/wamp/www/archive fud/admin/projects/");
 define("UPLOAD_DIR", "/wamp/htdocs/SLU_archive/projects/");

 // set image maxsize to 1MB
 $maxsize = 2000240;
 if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
 
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        $e = "<li>An error occurred.</li>";
         }
	
 // verify the file is a GIF, JPEG, or PNG
$fileType = $_FILES['myFile']['type'];

$allowed = array("application/msword", "application/docx","application/pdf");
/*if (!in_array($fileType, $allowed)) {
$e .= "Only MSWORD OR PDF format are allowed </li>";
 }
 */
if( $_FILES['myFile']['size'] > $maxsize) 
 { 
 $e .= "<li>Your file is too large.
 please select a file that is not greater than 1MB</li>"; 

 }
    if (empty($e)){
    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
 
    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
 
    // preserve file from temporary directory
	
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
		
$_SESSION['file'] = $name;

		$pfile = $_SESSION['file'];
		$idno = mysql_real_escape_string(htmlentities($_POST['idno']));
		$year = mysql_real_escape_string(htmlentities($_POST['year']));
		$supervisorId = mysql_real_escape_string(htmlentities($_POST['supervisor']));
		$title = mysql_real_escape_string(htmlentities($_POST['tittle']));
		$aim = mysql_real_escape_string(htmlentities($_POST['aim']));
		$obj = mysql_real_escape_string(htmlentities(nl2br($_POST['obj'])));
		$department = $_SESSION['title'];
		 	$qr = "SELECT * FROM supervisors WHERE SupervisorId = '$supervisorId'";
		  $sql = mysql_query($qr);// to get the name of the supervisor 
							
							Confirm_query($sql, "failed to insert new dept", "");
                            if ($sql)
                            {	
                                while ($unit  = mysql_fetch_assoc($sql)){
									$superName = $unit['Tittle'] . " " . $unit['Fullname'];
								}
							}
		
		$qr = "INSERT INTO projects (MatricNo, ProjectTittle, ProjectYear, ProjectAim, ProjectObj, ProjectSupervisor, SupervisorId, ProjectMain, Department ) VALUES ('$idno', '$title', '$year', '$aim', '$obj', '$superName', '$supervisorId', '$pfile', '$department' )";
		//$sql = mysql_query($qr);
		$result = mysql_query($qr);
 if (!$result){
 die('Could not upload file: ' . mysql_error());
 }
		
$_SESSION['ok'] = "yes";
   if (!$success) {
        echo "<p>Unable to save file.</p>";
        exit;
    }
    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
	echo "<div class='notification'>Project Added to Archives</div>";
}
}
		
	}
echo $e; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>

<fieldset class="field"> <legend>Register New Project</legend>
<form method="post" action="" enctype="multipart/form-data">
    <table width="88%" border="0" cellspacing="8" cellpadding="5">
      <tr>
      	<td width="166" align="center">ID Number</td>
        <td width="281"><input type="text" class="txt" name="idno" required="required"></td>
        <td width="108" align="center">Project Tittle</td>
        <td width="257"><input type="text" class="txt" name="tittle" required="required"></td>
      </tr>
      
       <tr>
      	<td width="166" align="center">Project Year</td>
        <td width="281"><input type="text" class="txt" name="year" required="required"></td>
        <td width="108" align="center">Supervisor</td>
        <td width="257">
        	<select id="unit" name="supervisor" required="required"  class="txt"/>
                    <option value="">Select Supervisor</option>
                        <?php
							$dept = $_SESSION['title']; 
                            $qr = "SELECT * FROM supervisors WHERE Department = '$dept'";
                            $sql = mysql_query($qr);
							Confirm_query($sql, "failed to insert new dept");
                            if ($sql)
                            {	
                                while ($unit  = mysql_fetch_assoc($sql)){
                                
                        ?>
                                <option value="<?php echo $unit['SupervisorId']; ?>" ><?php echo $unit['Tittle'] . " " . $unit['Fullname']; ?></option> 
                                    
                        <?php }} ?>
                    </select>
        
        </td>
      </tr>
      <tr>
        <td width="166" align="center">Aim</td>
        <td width="281"><textarea class="txt" name="aim" required="required"></textarea></td>
        <td width="108" align="center">Abstract </td>
        <td width="257"><textarea class="txt" name="obj" required="required"></textarea></td>
      </tr>
      <tr>
      	 <td colspan="2" align="center">Project File: <input type="file" class="sButton" name="myFile" required="required" /></td>
        <td colspan="2" align="center"><input type="submit" class="sButton" name="addProject" value="ADD" /></td>
        
      </tr>
    </table>
</form>

</fieldset>
</body>
</html>