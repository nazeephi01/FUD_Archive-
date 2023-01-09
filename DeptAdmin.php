<?php session_start();?>
<?php include("includes/connection.php"); ?>
<?php // this block is to add new supervisors
	if(isset($_POST['addSuper'])){
		$tittle = mysql_real_escape_string(htmlentities($_POST['tittle']));
		$name = mysql_real_escape_string(htmlentities($_POST['name']));
		$username = mysql_real_escape_string(htmlentities($_POST['username']));
		$password = mysql_real_escape_string(htmlentities($_POST['password']));
		$department = $_SESSION['title'];
		$qr = "INSERT INTO supervisors (Fullname, Tittle, Username, Password, Department) VALUES ('$name', '$tittle', '$username', '$password', '$department' )";
		$sql = mysql_query($qr);
		$_SESSION['newSp'] ="<div class='notification' >".  $tittle . " " . $name . " Has been Added as a Supervisor</div>";
		 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SESSION['title']; ?></title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div id="allContent">
		<div id="popout">
			<div id='popoutContents'>
            <div class="popdetails"><h4>Project Full Details</h4></div>
				<div id='close'>
					<img src='images/closeicon.png' alt='close' title='close' />
				</div>
				
				<div id="pop">
                </div>
				
				
			</div>
		</div>
<div class="wrapper">
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
    <div class="content">    
    <div class="leftNav">    	
    	<div class="con">
        <a href="DeptAdmin.php?addP"><span class="navitems" > Add Project</span></a><br />
        <span class="navitems" id="addS"> Add Supervisor</span></a><br />
         <a href="DeptAdmin.php?archives"><span class="navitems" id="archives"> Archives</span></a><br />
        <span class="navitems" id="ac"> My Account</span><br />
        
        <a href="admin.php?logout"><span class="navitems"> Logout</span></a><br />
        </div>
        <div class="conLink"> 
        </div>
    </div>
    <center>
        <div class="rightcon">
           <?php if(isset($_GET['addS'])) {
			   		include("addSuper.php");
			   }
			?>
            <?php if(isset($_GET['addP'])) {
			   		include("addProject.php");
			   }
			?>
             <?php if(isset($_GET['archives'])) {
			   		include("archive.php");
			   }
			?>
             <?php if(isset($_SESSION['newSp'])) {
				 echo $_SESSION['newSp'];
			   		include("addSuper.php");
					unset($_SESSION['newSp']);
			   }
			?>
        </div>
    </center>
    	
    </div>
     
    <div class="b-example-divider"></div>
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
    

</div></div>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/js.js" ></script>

</body>
</html>
