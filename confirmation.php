<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>San Antonio De Padua Website</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/church.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	
    <body>
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
		
		<!-- Top menu -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">San Antonio De Padua Parish</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li><a href="history.php">History</a></li>
							<li><a href="stanthony.php">St. Anthony of Padua</a></li>
							<li><a href="prayer.php">Prayer of St. Anthony</a></li>	
						</ul>
						<li class="dropdown">
						<a href="massintention.php" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li><a href="massintention.php">Mass Intention</a></li>
							<li><a href="baptism.php">Baptism</a></li>
							<li><a href="reservation.php">Reservation</a></li>
						</ul>	
						<li class="dropdown">
						<a href="data.php" class="dropdown-toggle" data-toggle="dropdown">Data<b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li><a href="dataintention.php">Mass Intention</a></li>
							<li><a href="data.php">Baptism</a></li>
							<li><a href="show.php">Reservation</a></li>
							<li><a href="datadeath.php">Death</a></li>
							<li><a href="datamatrimony.php">Wedding</a></li>
							<li><a href="dataconfirmation.php">Confirmation</a></li>
						</ul>						
						<li><a href="gallery.php">Gallery</a></li>
						 <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li><a href="mass.php">Masses</a></li>
								<li><a href="activities.php">Activities</a></li>  
								</ul>
							</li>
						 <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li><a href="missionandvission.php">Mission and Vission</a></li>
								<li><a href="pp.php">Parish Profile</a></li> 
								<li><a href="organizations.php">List of Organizations</a></li>	 
								</ul>
							</li>
						 <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li><a href="meetings.php">Meetings</a></li>
								<li><a href="contactus.php">Contact Us</a></li>  
								</ul>
							</li>
						<li><a href="logout.php">Log-Out</a></li>
					</ul>
				</div>
			</div>
		</nav>
	
	
		<!-- Block 2 -->
       <div class="block-2-container section-container">
	        <div class="container">
	            <div class="row">
	            	
	            	<div class="col-sm-6 block-2-box block-2-right wow fadeInDown">	 
					
		<div class="block-3-container section-container what-we-do-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <style>
							.w3-lobster {
								font-family: "Lobster", serif;
								}
						</style>
						<div class="w3-container w3-lobster">
						<p class="w3-xxxlarge">Data of Baptism</p>
						</div>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
						<p>
						<br/>
						<center>
						<form method = "GET" action = "<?Php echo $_SERVER['PHP_SELF'];?>">
						No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="no" pattern="[0-9]{1}$" title="" required /><br><br>
					 
						Number of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nob" pattern="[0-9]{1}$" title="" required /><br><br>
					  
						Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" /><br><br>
				
						First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" pattern="[a-zA-Z]*$" title="" required /><br><br>
					  
						Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" pattern="[a-zA-Z]*$" title="" required /><br><br>
					  
						Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" pattern="[0-9]{2}$" title="" required /><br><br>
					  
						Church:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="chch" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
					  
						Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" pattern="[a-zA-Z]*$" title="" required /><br><br>
					  
						Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
					  
						Mother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
						
						Godfather's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ninong" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
						
						Godmother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ninang" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
					  
						Pesos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pesos" pattern="[0-9]*$"title="" required /><br><br>
					  
						Bishop:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bishop" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title="" required /><br><br>
					  
				
				
						
						
				
						<input type="submit" name="submit" onClick="return confirm('Are you sure?')"  value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="update" onClick="return confirm('Are you sure?')" value="Update"><br/><br/>
						<input type="submit" name="delete" onClick="return confirm('Are you sure?')" value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href = "dataconfirmation.php" button type="button" class="btn btn-success">Data of Confirmation</button></a>
						<br /><br />
						
				</p>
				</form>
				</center>	
						
		<?php
		
		$connect = mysqli_connect("localhost", "root", "", "church");
		if ($connect->connect_error) 
		{
		die("Connection failed: " . $connect->connect_error);
		} 
		
		?>
		
		
		
		<!-- insert -->
		
		<?php
		if (isset($_GET['submit'])){
					
		$state = $connect->prepare("INSERT INTO confirmation VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
		$state->bind_param("ssssssssssssss", $no, $nob, $date ,$fname, $lname, $age, $chch, $address, $pname, $mname, $ninong, $ninang, $pesos, $bishop);
		
		
		
			$no = $_GET['no'];
			$nob = $_GET['nob'];
			$date = $_GET['date'];
			$fname= $_GET['fname'];
			$lname = $_GET['lname'];
			$age = $_GET['age'];
			$chch = $_GET['chch'];
			$address = $_GET['address'];
			$pname = $_GET['pname'];
			$mname = $_GET['mname'];
			$ninong = $_GET['ninong'];
			$ninang = $_GET['ninang'];
			$pesos = $_GET['pesos'];
			$bishop = $_GET['bishop'];
			
		if ($state->execute()){
			echo '<script language="javascript">;';
			echo 'alert("Save Successful!")';
			echo '</script>';
			echo '<script>window.location="confirmation.php"</script>';
			
			}
			else{
			echo "Error" .$connection->error;
			}
			
		$state->close();
		$connection->close();
			
			
			
			}
		
		?>
		
		<!-- update  -->
		
		
			<?php
					if(isset($_GET['update'])){
					$statement = $connect -> prepare ("UPDATE confirmation SET nob=?, date=?, fname=?, lname=?, age=?, church=?, address=?, pname=?, mname=?, ninong=?, ninang=?, pesos=?, bishop=?  WHERE no=?");
					$statement -> bind_param("ssssssssssssss" , $nob, $date, $fname, $lname, $age, $church, $address,  $pname, $mname, $ninong, $ninang, $pesos, $bishop);
						
						$no = $_GET['no'];
						$nob = $_GET['nob'];
						$date = $_GET['date'];
						$fname= $_GET['fname'];
						$lname = $_GET['lname'];
						$age = $_GET['age'];
						$church = $_GET['church'];
						$address = $_GET['address'];
						$pname = $_GET['pname'];
						$mname = $_GET['mname'];
						$ninong = $_GET['ninong'];
						$ninang = $_GET['ninang'];
						$pesos = $_GET['pesos'];
						$bishop = $_GET['bishop'];
			
				if ($statement -> execute()){
					print '<script language = "javascript">';
					print 'alert("Update Succesfull!!")';
					print '</script>';
					}else
					{
					print "Error ".$connect->error;
					}
					$statement->close();
					$connect->close();
					}
			?>
		
		<!-- delete -->
		
		<?php
				if(isset($_GET['delete'])){
				$statement = $connect -> prepare ("DELETE FROM confirmation WHERE no=?");
				$statement -> bind_param("s" ,	$no);
				$no = $_GET['no'];
				if ($statement -> execute()){
				print '<script language = "javascript">';
				print 'alert("Delete Succesfull!!")';
				print '</script>';
				}
				else{
				print "Error ".$conn->error;
				}
				$statement->close();
				$connect->close();
				}
		?>
		
		
		
		<br/>
		
		
		
		
		
		
		
		
        
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
										
		
		
		
        
	
	
	
	
	
	

			
		
		
		
		
	
		          <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
		        	<div class="col-sm-12">
		        		<div class="scroll-to-top">
		        			<a href="#"><i class="fa fa-chevron-up"></i></a>
		        		</div>
		        	</div>
		        </div>
	            <div class="row">
                    <div class="col-sm-7 footer-copyright">
                    	&copy; Lancar Bootstrap Template by <a href="http://azmind.com">Azmind</a>.
                    </div>
                    <div class="col-sm-5 footer-social">
                    	<a href="https://www.facebook.com/groups/148981901832486/members/"><i class="fa fa-facebook"></i></a>
	                	
                    </div>
	            </div>
	        </div>
        </footer>
         
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    
		</body>
		</html>