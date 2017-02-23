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
							<li><a href="dataintention.php">Data of Mass Intention</a></li>
							<li><a href="data.php">Data of Baptism</a></li>
							<li><a href="show.php">Data of Reservation</a></li>
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
						<li><a href="login.php">Log-Out</a></li>
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
						<p class="w3-xxxlarge">Data of Matrimony</p>
						</div>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
						<br/>
						<center>
						<form method = "GET" action = "<?Php echo $_SERVER['PHP_SELF'];?>">
	                   No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="no" pattern="[0-9]$" title="" required /><br><br>
					  
					   Number of Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nob" pattern="[0-9]{1}$" title=""  required /><br><br>
					  
				       Date of Matrimony:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" pattern="[0-9]$" title=""  required /><br><br>
					   
					   Male's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Woman's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gname" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Man's Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bstatus" pattern="[a-zA-Z]*$" title=""  required /><br><br>
						
					   Woman's Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gstatus" pattern="[a-zA-Z]*$" title=""  required /><br><br>
						
					   Man's Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bage" pattern="[0-9]{2}$" title=""  required /><br><br>
						
					   Woman's Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gage" pattern="[0-9]{2}$" title=""  required /><br><br>
							
					   Man's Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="badd" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Woman's Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gadd" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
					
					   Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bparentf" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Mother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bparentm" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Family Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="faddress" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
												
					   Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gparentf" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
							
					   Mother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gparentm" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
					
					   Family Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gaddress" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
									
					   Godfather's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ninong" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Residence:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nresidence" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
									
					   Godmother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ninang" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
				  	
					   Residence:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gresidence" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						  
					   Minister:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="minister" pattern="[a-zA-Z_]+(.[a-zA-Z-_]+)*$" title=""  required /><br><br>
						
					   Marriage License:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="license" pattern="" title=""  required /><br><br>
						   
					   
				
					
				
				
				<input type="submit" name="submit" onClick="return confirm('Are you sure?')" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="update" onClick="return confirm('Are you sure?')" value="Update"><br/><br/>
				<input type="submit" name="delete" onClick="return confirm('Are you sure?')"  value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href = "datamatrimony.php" button type="button" class="btn btn-success">Data of Baptism</button></a><br/></br>
				

				
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
					
		$state = $connect->prepare("INSERT INTO matrimony VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
		$state->bind_param("sssssssssssssssssssssss", $no, $nob, $date ,$bname, $gname, $bstatus, $gstatus, $bage, $gage, $badd, $gadd, $bparentf, $bparentm, $faddress, $gparentf, $gparentm, $gaddress, $ninong, $nresidence, $ninang, $gresidence, $minister, $license );
		
		
		
			$no = $_GET['no'];
			$nob = $_GET['nob'];
			$date = $_GET['date'];
			$bname= $_GET['bname'];
			$gname = $_GET['gname'];
			$bstatus = $_GET['bstatus'];
			$gstatus = $_GET['gstatus'];
			$bage = $_GET['bage'];
			$gage = $_GET['gage'];
			$badd = $_GET['badd'];
			$gadd = $_GET['gadd'];
			$bparentf = $_GET['bparentf'];
			$bparentm = $_GET['bparentm'];
			$faddress = $_GET['faddress'];
			$gparentf = $_GET['gparentf'];
			$gparentm = $_GET['gparentm'];
			$gaddress = $_GET['gaddress'];
			$ninong = $_GET['ninong'];
			$nresidence = $_GET['nresidence'];
			$ninang = $_GET['ninang'];
			$gresidence = $_GET['gresidence'];
			$minister = $_GET['minister'];
			$license = $_GET['license'];
			
			
			
			
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
			echo '<script>window.location="matrimony.php"</script>';
			
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
					$statement = $connect -> prepare ("UPDATE matrimony SET nob=?, date=?, bname=?, gname=?, bstatus=?, gstatus=?, bage=?, gage=?, badd=?, gadd=?, bparentf=?, bparentm=?, faddress=?, gparentf=?, gparentm=?, gaddress=?, ninong=?, nresidence=?, ninang=?, gresidence=?, minister=?, license=?, WHERE no=?");
					$statement -> bind_param("ssssssssssssssssssssssssssss" , $nob, $date, $bname, $gname, $bstatus, $gstatus, $bage, $gage, $badd, $badd, $gadd, $bparentf, $bparentm, $faddress, $gparentf, $gparentm, $gaddress, $ninong, $nresidence, $ninang, $gresidence, $minister, $license, $no);
					$no = $_GET['no'];
					$nob = $_GET['nob'];
					$date = $_GET['date'];
					$bname= $_GET['bname'];
					$gname = $_GET['gname'];
					$bstatus = $_GET['bstatus'];
					$gstatus = $_GET['gstatus'];
					$bage = $_GET['bage'];
					$gage = $_GET['gage'];
					$badd = $_GET['badd'];
					$gadd = $_GET['gadd'];
					$bparentf = $_GET['bparentf'];
					$bparentm = $_GET['bparentm'];
					$faddress = $_GET['faddress'];
					$gparentf = $_GET['gparentf'];
					$gparentm = $_GET['gparentm'];
					$gaddress = $_GET['faddress'];
					$ninong = $_GET['ninong'];
					$nresidence = $_GET['nresidence'];
					$ninang = $_GET['ninang'];
					$gresidence = $_GET['gresidence'];
					$minister = $_GET['minister'];
					$license = $_GET['license'];
					
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
				$statement = $connect -> prepare ("DELETE FROM matrimony WHERE license=?");
				$statement -> bind_param("s" ,	$license);
				$license = $_GET['license'];
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
		
			
		<!-- show data -->
		<?php
			if(isset($_GET['show'])){
				$query = "SELECT * from matrimony";
				$data = $connect -> query($query);
				if ($data -> num_rows > 0){
				print "<center><font color=blue><table border = 5>";
				print "<tr>";
				print "<td> No. </td>";
				print "<td><center> Number of Book </td>";
				print "<td><center> Date of Baptism </td>";
				print "<td><center> First Name </td>";
				print "<td><center> M.I. </td>";
				print "<td><center> Last Name </td>";
				print "<td><center> Birthday </td>";
				print "<td><center> Legitimity </td>";
				print "<td><center> Father's Name </td>";
				print "<td><center> Place of Birth </td>";
				print "<td><center> Mother's Name </td>";
				print "<td><center> Place of Birth </td>";
				print "<td><center> Address </td>";
				print "<td><center> God Parents </td>";
				print "<td><center> Residence </td>";
				print "<td><center> God Parents </td>";
				print "<td><center> Residence </td>";
				print "<td><center> Minister </td>";
				print "</tr>";
			while($row = $data->fetch_assoc()){
				print "<tr>";
				print "<td><center>".$row['no']."</td>";
				print "<td><center>".$row['nob']."</td>";
				print "<td><center>".$row['dob']."</td>";
				print "<td><center>".$row['firstname']."</td>";
				print "<td><center>".$row['mi']."</td>";
				print "<td><center>".$row['lastname']."</td>";
				print "<td><center>".$row['bday']."</td>";
				print "<td><center>".$row['leg']."</td>";
				print "<td><center>".$row['fname']."</td>";
				print "<td><center>".$row['pob1']."</td>";
				print "<td><center>".$row['mname']."</td>";
				print "<td><center>".$row['pob2']."</td>";
				print "<td><center>".$row['address']."</td>";
				print "<td><center>".$row['ninong']."</td>";
				print "<td><center>".$row['rninong']."</td>";
				print "<td><center>".$row['ninang']."</td>";
				print "<td><center>".$row['rninang']."</td>";
				print "<td><center>".$row['minister']."</td>";
				print "</tr>";
			}
				print "</table>";
			}
			else{
				print "No data found!<br/>";
			}
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