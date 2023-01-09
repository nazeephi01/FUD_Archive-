<?php session_start();?>
<?php include("includes/connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SESSION['title']; ?></title>
<link rel="stylesheet" href="css/style2.css" type="text/css" />
<link rel="stylesheet" href="css/style3.css" type="text/css" />
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
        <a href="#"><span class="navitems"> Home</span></a><br />
       
        <span class="navitems" id="ac"> My Account</span><br />
        
        <a href="admin.php?logout"><span class="navitems"> Logout</span></a><br />
        </div>
        <div class="conLink"> 
        </div>
    </div>
    <center>
        <div class="rightcon">
          <div class="top">
          	<fieldset><legend id="sitems"><span class="searchitems">Tittle: <input type="text" name="title" class="tx" id="title" />  </span>
            <span class="searchitems">Abstract: <input type="text" name="title" class="tx" id="obj" />  </span>
            </legend>
            <p><h3>List of Available Projects </h3></p>
            </fieldset>
            <div class="feedback"></div>
          </div>
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
<script type="text/javascript" src="js/getProjects.js" ></script>
 <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
   <script type="text/javascript" src="js/myjs.js"></script> 
  
</body>
</html>
