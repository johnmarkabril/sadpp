<!-- insert -->
		
		<?php
		if (isset($_GET['submit'])){
		
			$no = $_GET['no'];
			$nob = $_GET['nob'];
			$dob = $_GET['dob'];
			$firstname= $_GET['firstname'];
			$mi = $_GET['mi'];
			$lastname = $_GET['lastname'];
			$bday = $_GET['bday'];
			$leg = $_GET['leg'];
			$fname = $_GET['fname'];
			$pob1 = $_GET['pob1'];
			$mname = $_GET['mname'];
			$po2 = $_GET['pob2'];
			$address = $_GET['address'];
			$ninong = $_GET['ninong'];
			$rninong = $_GET['rninong'];
			$ninang = $_GET['ninang'];
			$rninang = $_GET['rninang'];
			$minister = $_GET['minister'];
			
		mysqli_query($connect,"INSERT INTO baptism VALUES ('$no', '$nob', '$dob', '$firstname', '$mi', '$lastname', '$bday', '$leg', '$fname', '$pob1', '$mname', '$pob2', '$address', '$ninong', '$rninong', '$ninang', '$rninang', '$minister')");
			
			
			
		if (mysqli_query($connect, $sql)) {
			echo '<script language="javascript">;';
			echo 'alert("Save Successful!")';
			echo '</script>';
			echo '<script>window.location="baptism.php"</script>';
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				}
			
			
			
			} 	
			
		mysqli_close($connect);
		?>
		
		
		