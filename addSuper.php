<?php session_start(); ?>
<?php 
		include("includes/connection.php");
		
		echo $_SESSION['car'];
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

<fieldset class="field"> <legend>Register New Supervisor</legend>
<form method="post" action="DeptAdmin.php">
    <table width="88%" border="0" cellspacing="5" cellpadding="5">
      <tr>
      	<td width="166" align="center">Tittle</td>
        <td width="281"><select name="tittle" class="txt" required="required">
        					<option value="">Select Tittle</option>
							 <option value="Dr"> Dr </option>
							  <option value="Dr"> Mallam </option>
                            <option value="Mr"> Mr </option>
							<option value="Mr"> Mss </option>
							<option value="Mr"> Mrs </option>
                            <option value="Prof"> Prof </option>
                        </select>
        </td>
        <td width="108" align="center">Fullname</td>
        <td width="257"><input type="text" class="txt" name="name" required="required" placeholder="Surname Other names"></td>
      </tr>
      
       <tr>
      	<td width="166" align="center">Username <?php echo $_SESSION['car'];?></td>
        <td width="281"><input type="text" class="txt" name="username" required="required" placeholder="Username"></td>
        <td width="108" align="center">Password</td>
        <td width="257"><input type="password" class="txt" name="password" required="required" placeholder="Password"></td>
      </tr>
     
      <tr>
      	 
        <td colspan="4" align="center"><input type="submit" class="sButton" name="addSuper" value="ADD" /></td>
        
      </tr>
    </table>
</form>

</fieldset>
</body>
</html>