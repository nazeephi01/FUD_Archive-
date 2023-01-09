<?php session_start();?>
<?php include("includes/connection.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SESSION['title']; ?></title>
<link rel="stylesheet" href="css/style2.css" type="text/css" />
<link rel="stylesheet" href="css/style3.css" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
      .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                          }

      .bi {
    vertical-align: -.125em;
    fill: currentColor;
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
  
    <div class="content">    
    <div class="leftNav">    	
    	<div class="con">
        <a href="#"><span class="navitems" id="curent"> About Us</span></a><br />

        <a href="home.php"><span class="navitems"> Home </span></a><br />
        <a href="#"><span class="navitems"> Log Out</span></a><br />
        </div>
        <div class="conLink"> 
        </div>
    </div>
    <center>
        <div class="rightcon">
          <div class="top">
          	<fieldset><legend id="sitems"><center><Span class="dash">About Us</Span></center>
            </legend>
            
           <div class="dash-con">
            <center><h3>
                         Computerized Project Archive System (CPAS) is an electronic or digital archive system that keeps the record of students’ projects. In these kinds of systems, each project copy is stored in electronic format and the system provides search capabilities for easy retrieval of the stored materials. 
            </h3></center>
           </div>
           </fieldset>
            
           
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
