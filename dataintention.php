<?php
	session_start();
	if ( $_SESSION["session_data"]['position'] == 'admin' ) {
?>
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
		<div class="block-3-container section-container what-we-do-container">
			<div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <style>
							.w3-lobster {
								font-family: "Lobster", serif;
								}
						</style>
						<div id="search">
							<div class="w3-container w3-lobster">
								<p class="w3-xxxlarge">Mass Intention</p>
							</div>
							<div class="divider-1 wow fadeInUp"><span></span></div>
							<br/>
							<form method = "GET" action = "<?Php echo $_SERVER['PHP_SELF'];?>">
								<div>
									<label for="search"></label>
									<input type="text" class="search" name="search" id="search" placeholder="Search"  />
								</div><br />
							</form>
							<table border="1">
								<?php
									$connect = mysqli_connect("localhost", "root", "", "church");
									if ($connect->connect_error) {
										die("Connection failed: " . $connect->connect_error);
									} 
									$query = "SELECT * from mintention";
									$data = $connect -> query($query);
									if ($data -> num_rows > 0){
								?>
					<div class="container">
								                                         
						<table class="table table-striped table-bordered table-hover table-condensed">
							<th>	
								<tr>
									<th><center> First Name </th>
									<th><center> Last Name </th>
									<th><center> Contact Number </th>
									<th><center> Address </th>
									<th><center> Intention </th>
									<th><center> Date </th>
									<th><center> Time </th>
									<th><center> Name of Intention </th>
								</tr>
								<tbody class="list">
									<?php
										while($row = $data->fetch_assoc()){
									?>
											<tr>
												<td class="fname"><?php echo $row['fname']; ?></td>
												<td class="lname"><?php echo $row['lname']; ?></td>
												<td class="cpnumber"><?php echo $row['cpnumber']; ?></td>
												<td class=""><?php echo $row['address']; ?></td>
												<td class=""><?php echo $row['intention']; ?></td>
												<td class=""><?php echo $row['date']; ?></td>
												<td class=""><?php echo $row['time']; ?></td>
												<td class="ni"><?php echo $row['ni']; ?></td>
											</tr>
									<?php
										}
									}
									$connect->close();
									?>
								</tbody>
							</table>
							
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
        <script src="list/list.js"></script>
        <script src="list/list.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script>
	$(document).ready(function(){
		var options = {
			valueNames: [ 'fname','lname','ni' ]
		};
		
		var searchList = new List('search', options);
	});
</script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    
		</body>
		</html>
		<?php
	} else {
?>
		<script>window.location="home.php"</script>
<?php
	}
?>