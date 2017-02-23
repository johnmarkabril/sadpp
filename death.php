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
								<li><a href="novena.php">Novena</a></li>  
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
								<li><a href="contact.php">Contact Us</a></li>  
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
						<p class="w3-xxxlarge">Death</p>
						</div>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
						<br/>
						<center>
						<form method = "GET" action = "<?Php echo $_SERVER['PHP_SELF'];?>">
	                   No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="no" pattern="[0-9]$" title="" required /><br><br>
					  
					   Number of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nob" pattern="[0-9]{1}$" title=""  required /><br><br>
					  
					   First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						 
				       Date of Death:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="namatay" pattern="[0-9]$" title=""  required /><br><br>
					   
					   Date of Interment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="nilibing" pattern="[0-9]$" title=""  required /><br><br>
					   
					   Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" pattern="[0-9]{2}$" title=""  required /><br><br>
						
					   Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="status" pattern= "" title=""  required /><br><br>
					    <option> Single </option>
						<option> Married </option>
						<option> Widowed </option>
						<option> Child </option>
						</select></br><br>
					   Parents Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pname" pattern="[a-zA-Z]*$" title=""  required /><br><br>
						
					   Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Sacrament:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sacrament" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
							
					   Cause of Death:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="kinamatay" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Cemetery:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cemetery" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
					
					   Classis:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="classis" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Minister:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="minister" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
					
				
					
				
				
				<input type="submit" name="submit" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="update" value="Update"><br/><br/>
				<input type="submit" name="delete" value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href = "datadeath.php" button type="button" class="btn btn-success">Data of Death</button></a><br/></br>
				

				
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
					
		$state = $connect->prepare("INSERT INTO death VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
		$state->bind_param("sssssssssssssss", $no, $nob, $fname ,$lname, $namatay, $nilibing, $age, $status, $pname, $address, $sacrament, $kinamatay, $cemetery, $classis, $minister);
		
		
		
			$no = $_GET['no'];
			$nob = $_GET['nob'];
			$fname = $_GET['fname'];
			$lname= $_GET['lname'];
			$namatay = $_GET['namatay'];
			$nilibing = $_GET['nilibing'];
			$age = $_GET['age'];
			$status = $_GET['status'];
			$pname = $_GET['pname'];
			$address = $_GET['address'];
			$sacrament = $_GET['sacrament'];
			$kinamatay = $_GET['kinamatay'];
			$cemetery = $_GET['cemetery'];
			$classis = $_GET['classis'];
			$minister = $_GET['minister'];
			
			
			
			
		//$noCheck = preg_match('/[0-9]{3}$/', $no);
		//$nobCheck = preg_match('/[0-9]{1}$/', $nob);
		//$dobCheck = preg_match('/[0-9]$/', $dob);
		//$firstnameCheck = preg_match('/[a-zA-Z ]$/', $firstname);
		//$miCheck = preg_match('/[a-zA-Z ]$/', $mi);
		//$lastnameCheck = preg_match('/[a-zA-Z ]$/', $lastname);
		//$bdayCheck = preg_match('/[0-9]$/', $bday);
		//$legCheck = preg_match('/[a-zA-Z ]$/', $leg);
		//$fnameCheck = preg_match('/[a-zA-Z ]$/', $fname);
		//$pob1Check = preg_match('/[a-zA-Z ]$/', $pob1);
		//$mnameCheck = preg_match('/[a-zA-Z ]$/', $mname);
		//$pob2Check = preg_match('/[a-zA-Z ]$/', $pob2);
		//$addressCheck = preg_match('/[a-zA-Z ]$/', $address);
		//$ninongCheck = preg_match('/[a-zA-Z ]*$/', $ninong);
		//$rninongCheck = preg_match('/[a-zA-Z ]$/', $rninong);
		//$ninangCheck = preg_match('/[a-zA-Z ]$/', $ninang);
		//$rninangCheck = preg_match('/[a-zA-Z ]$/', $rninang);
		//$ministerCheck = preg_match('/[a-zA-Z ]$/', $minister);

		
			
		if ($state->execute()){
			echo '<script language="javascript">;';
			echo 'alert("Save Successful!")';
			echo '</script>';
			echo '<script>window.location="death.php"</script>';
			
			}
			else{
			echo "Error" .$connection->error;
			}
			
		$state->close();
		$connection->close();
			
		}
			
			
		
		?>
		
		<!-- Update -->
		
		
		
		<?php
					if(isset($_GET['update'])){
					$statement = $connect -> prepare ("UPDATE death SET nob=?, fname=?, lname=?, namatay=?, nilibing=?, age=?, status=?, pname=?, address=?, sacrament=?, kinamatay=?, cemetery=?, classis=?, minister=?, WHERE no=?");
					$statement -> bind_param("sssssssssssssss" , $nob, $fname, $lname, $namatay, $nilibing, $age, $status, $pname, $address, $sacrament, $kinamatay, $cemetery, $classis, $minister, $no);
					$no = $_GET['no'];
					$nob = $_GET['nob'];
					$fname = $_GET['fname'];
					$lname= $_GET['lname'];
					$namatay = $_GET['namatay'];
					$nilibing = $_GET['nilibing'];
					$age = $_GET['age'];
					$status = $_GET['status'];
					$pname = $_GET['pname'];
					$address = $_GET['address'];
					$sacrament = $_GET['sacrament'];
					$kinamatay = $_GET['kinamatay'];
					$cemetery = $_GET['cemetery'];
					$classis = $_GET['classis'];
					$minister = $_GET['minister'];
			
			
					
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
		
		
		
			
		
		
		
		<!-- Delete -->
		
		
		<?php
				if(isset($_GET['delete'])){
				$statement = $connect -> prepare ("DELETE FROM death WHERE no=?");
				$statement -> bind_param("s" ,	$no);
				$no = $_GET['no'];
				if ($statement -> execute()){
				print '<script language = "javascript">';
				print 'alert("Delete Succesfull!!")';
				print '</script>';
				}
				else{
				print "Error ".$connect->error;
				}
				$statement->close();
				$connect->close();
				}
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
        
		</div>
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