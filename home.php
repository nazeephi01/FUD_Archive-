<?php session_start();?>
<?php include("includes/connection.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
<title><?php echo $_SESSION['title']; ?></title>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
  <!--<style>
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


  </style>-->
</head>

<body>
	<main>
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

  <div class="container py-4">
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
           	
	  <div class="con">
	  <a href="#"><span class="navitems" > Home</span></a><br />

	  <a href="about_us.php"><span class="navitems"> About Us</span></a><br />
	  <a href="#"><span class="navitems"> Contact</span></a><br />
	   <a href="#"><span class="navitems" > FAQs</span></a><br />
	  </div>
	  <div class="conLink"> 
	  </div>
  </div>
          
        
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          
        <center>
	
  <div class="top">
    <fieldset><legend id="sitems"> <Span >DashBoard</Span>
    </legend> 
    
   <div class="dash-con">
    <center>
     <div class="dash-inner">
      <a href="index.php"><div class="dash-items" id="Faculty"><h2>Faculty</h2></div></a>
       <a href="index.php"><div class="dash-items" id="department"><h2>Department</h2></div></a>
       <a href="index.php"><div class="dash-items" id="supervisor"><h2>Supervisor</h2></div></a>
      <a href="student.php"> <div class="dash-items" id="student"><h2>Students</h2></div></a>
     </div>
    </center>
   </div>
   </fieldset>
    
   
  </div>

</center>
        
        </div>
      </div>
    </div>

<div class="container">
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


	<div class="dept"></div>
	<div class="clear"> </div>
 </div>
     
  

                        </div>
			

	<div class="b-example-divider"></div>
	<!-- Footer -->
	<footer class=" text-center fixed-bottom" >
		<!-- Grid container -->
		<div data-spy="scroll" data-target="#contact" data-offset="0" tabindex="0"></div>
		<div class="container p-4">



			<!-- Section: Address -->
			<section class="">
				<!--Grid row-->
				<div class="row">

					<!--Grid column-->
					<div class="col-lg-4 col-sm-4 col-md-4 mb-4 mb-md-0">
						<img class="img-thumbnail" src="images/logo.png" height="30" width="60">
						<p>
							Faculty of Computing, , Department of Computer Science, Federal University Dutse, Jigawa State - NIGERIA.
						</p>
					</div>
					<!--Grid column-->


					<!--Grid column-->
					<div class="col-lg-4 col-sm-4 col-md-4 mb-4 mb-md-0">
						<h5 class="text-uppercase">Contact Us</h5>
						<p>
							Phone: (+234) 8127617738, 9034773570; <br> Email:&nbspfsccsc171020@fud.edu.ng
						</p>

						<!-- Section: Links -->

						<!-- Section: Social Media Links -->

						<!-- Website -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/house.svg"></a>

						<!-- Facebook -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/facebook.svg"></a>

						<!-- Twitter -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/twitter.svg"></a>


						<!-- Instagram -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/instagram.svg"></a>


						<!-- Google -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/google.svg"></a>

						<!-- Section: End Of Social media Links-->


					</div>
					<!--Grid column-->


					<!--Grid column-->
					<div class="col-lg-4 col-sm-4 col-md-4 mb-4 mb-md-0">
						<h5 class="text-uppercase">Developer</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" >Nazeeph bn Hassan</a>
							</li>
							<li>
								<a href="#!" >

						<!-- Facebook -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/facebook.svg"></a>

						<!-- Twitter -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/twitter.svg"></a>


						<!-- Instagram -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/instagram.svg"></a>


						<!-- Google -->
						<a class="btn btn-outline-light btn-secondary btn-floating m-1" href="#!" role="button"><img src="images/icons/google.svg"></a>
								</a>
							</li>

							
							<li>
								<a href="#!" class="text-white"></a>
							</li>
							<li>
								<a href="#!" class="text-white"></a>
							</li>
						</ul>
					</div>
					<!--Grid column-->


				</div>
				<!--Grid row-->
			</section>

		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a href="#!">Bn Hassan</a>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer End -->
						</main>
</body>
   <script type="text/javascript" src="js/jquery.js" ></script>
   <script type="text/javascript" src="js/js.js" ></script>
   <script type="text/javascript" src="js/getProjects.js" ></script>
   <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
   <script type="text/javascript" src="js/myjs.js"></script> 
</html>