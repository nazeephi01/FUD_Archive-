<?php 
	error_reporting(0);
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbName = "archive";
	$connection = mysql_connect($dbhost,$dbuser,$dbpassword);
		if(! $connection )
		{
			die('Could not connect: ' . 
			mysql_error());

		}
//select databaes
		$db_select=mysql_select_db($dbName, $connection);
			if (!$db_select)
			{
				die ("Could not select the database: <br />". mysql_error( ));
			}
?>


<?php if(isset($_GET['logout']))
{
	$_SESSION['tittle'] = NULL;
	unset($_SESSION['tittle']);
	session_destroy();
	header("location:home.php");
	
	}

?>