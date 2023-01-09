<?php session_start();?>
<?php include("includes/connection.php");?>
<?php include("includes/functions.php");?>
<?php //after the student has been loged in, his information will be fetch from the Student_clearnace table and the clearance status plus the 
//issues associated with his clearance for each unit will be displayed.
	if(isset($_POST['login'])){
		$user = mysql_real_escape_string(htmlentities($_POST['user']));
		$password = mysql_real_escape_string(htmlentities($_POST['password']));
	$qr = "SELECT * FROM administrators WHERE Username = '$user' AND Password = '$password'";
			$sql = mysql_query($qr);
			Confirm_query($sql, "crab", "");
			
			$t = mysql_num_rows($sql);
		if($t == "1")//if login is valid
			{	
				$row = mysql_fetch_assoc($sql);
				if( $user == "super" && $password == "super")
					{	
						$_SESSION['title'] = $row['Department'];
						$_SESSION['user'] = $row['Usernaame']; 
						header("location:admin.php?add");
					}
					else
					{
						$_SESSION['title'] = $row['Department']; 
						$_SESSION['user'] = $row['Usernaame'];
						header("location:DeptAdmin.php?addP");	
					}
				
			}
			else//login not valid
				{
						$qr = "SELECT * FROM supervisors WHERE Username = '$user' AND Password = '$password'";
						$sql = mysql_query($qr);
						$t = mysql_num_rows($sql);
						Confirm_query($sql, "crab", "");
						if($t == "1")//if login is valid
							{	
								$row = mysql_fetch_assoc($sql);
									
										$_SESSION['title'] = $row['Department'];
										$_SESSION['superId'] = $row['Id'];
										$_SESSION['name'] = $row['Tittle'] . " " .  $row['Fullname']; 
										header("location:super.php");
									
							}
					else {
								$E = "Incorrect Username or Password";

						}
			}
}
?>
<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>

<body>

  <div class="container">
  <nav class="navbar navbar-expand-lg  nav-tabs nav-fill navbar-light bg-light">
		<div class="container">
			
				<img src="images/logo.png" height="70" width="100" />
				  <span class="fs-4">Computer Science e-Project Archive</span>
				
		  
				<ul class="nav nav-pills">
				  <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
				  <li class="nav-item"><a href="about_us.php" class="nav-link">About Us</a></li>
				  <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
				  <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
				
				</ul>
			
			</div>
			
		</div>
	</nav> <div class="b-example-divider"></div>
  <div class="b-example-divider"></div>

    <div class="content">
    <div class="clear"> &nbsp;</div>
    	<center>
        	<div class="loginInclude">
    		<?php include("login.php");?>
        	</div>
        </center>
    </div>
    
    <<div class="b-example-divider"></div>
	<!-- Footer -->
	<footer class=" text-center fixed-bottom" >
    <!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a href="#!">Bn Hassan</a>
		</div>
		<!-- Copyright -->
	</footer>
  </div>
    



</body>
</html>