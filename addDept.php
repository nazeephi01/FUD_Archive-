<?php session_start(); ?>
<?php 
		include("includes/connection.php");
		include("includes/functions.php");
?>
<?php 
	if(isset($_POST['addDept'])){
		$skul = mysql_real_escape_string(htmlentities($_POST['school']));
		$dept = mysql_real_escape_string(htmlentities($_POST['department']));
		$username = mysql_real_escape_string(htmlentities($_POST['username']));
		$password = mysql_real_escape_string(htmlentities($_POST['password']));
		$qr = "INSERT INTO departments (DeptName , SchoolName ) VALUES ('$dept', '$skul')";
		$sql = mysql_query($qr);
		Confirm_query($sql, $dept . " Department Already Exist", $dept . " Department Successfuly Added");
		$qr = "INSERT INTO administrators (Department, Username, Password) VALUES ('$dept', '$username', '$password')";
		$sql = mysql_query($qr);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
 
<fieldset class="field"><legend>Register New Department</legend>
<form method="post">
    <table width="80%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td width="72" align="center">School</td>
        <td width="156"><select name="school" class="txt" required="required">
            <option value="">Select Faculty</option>
            <option value="Faculty of Science">Faculty of Computing</option>
            <option value="Faculty of Education">Faculty of Science</option>
            <option value="Faculty of Humanities">Faculty of Art and Social Science</option>
            <option value="Faculty of Humanities">Faculty of Agriculture</option>
            <option value="Faculty of Humanities">Faculty of Medicine</option>
            <option value="Faculty of Humanities">Faculty of Management Science</option>
                        
            </select>
        </td>
        <td width="118" align="center">Department</td>
        <td width="171"><input type="text" class="txt" name="department" required="required"></td>
      </tr>
      <tr>
      	<td width="118" align="center">Username</td>
        <td width="171"><input type="text" class="txt" name="username" required="required"></td>
        <td width="118" align="center">Password</td>
        <td width="171"><input type="password" class="txt" name="password" required="required"></td>
      </tr>
      <tr>
        <td colspan="4" align="center"><input type="submit" class="sButton" name="addDept" value="ADD" /></td>
        
      </tr>
    </table>
</form>

</fieldset>
</body>
</html>