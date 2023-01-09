<?php session_start();?>
<?php include("includes/connection.php"); 
 include("includes/functions.php");
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
       <a href="#"><span class="navitems">Faculty of Science</span></a><br />
        <a href="education.php"><span class="navitems" id="education"> Faculty of Computing</span><br />
        <a href="humanities.php"><span class="navitems" id="humanities"> Faculty of Art and Social Science</span><br />
        <a href="humanities.php"><span class="navitems" id="humanities"> Faculty of Medicine</span><br />
        <a href="humanities.php"><span class="navitems" id="humanities"> Faculty of Management Science</span><br />
        <a href="humanities.php"><span class="navitems" id="humanities"> Faculty of Agriculture</span><br />
        <a href="admin.php?add"><span class="navitems" id="admin"> Bact to Admin </span></a><br />
        <a href="home.php"><span class="navitems" id="home"> Log Out</span></a><br />
        </div>
        <div class="conLink"> 
        </div>
    </div>
    <center>
        <div class="rightcon">
          <div class="top">
          	<fieldset><legend id="sitems"><Span class="dash"> <center></Span> </center>
            </legend>
            
           <div class="dash con">
            <center>

            <p><h4>List of Registered Depatments in Faculty of Science </h4><br /></p>
<table cellpadding="8" cellspacing="5" border="1" id="tbl_adminlist" width="80%">
          <tr>
              <th width="5%">S/N</th><th width="13%">Department</th>
                
            </tr>
<?php

    $qr = "SELECT * FROM departments WHERE SchoolName = 'Faculty of Science'";   
    $sql = mysql_query($qr);
    Confirm_query($sql,"fail to get list of student", "");
     while ($adminList  = mysql_fetch_assoc($sql)){
       $sn += 1;
      
       ?>
    <tr>
          <h6><td><?php echo $sn; ?></td> </h6>
            <td align="center"><?php echo $adminList['DeptName'];?></td>
           
            
                
        </tr>           
      
      <?php } ?>
          </table>  
            </center>
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
