




<!DOCTYPE html>	
<html>
<head>
	<title>STUDENT DETAILS</title>
	<link rel="stylesheet" type="text/css" href="styleuser.css">


</head>
	<body>
	<div class="title">
		Application Form
	</div>
	<div class="profile">
		<div class="pro_img">
					<?php 
						include('process.php');
						$reg=$_SESSION['regnum'];
						$result = mysqli_query($con,"select * from profile where RegistrationNumber='$reg'") or die("error" . mysqli_error($con));

						$row=mysqli_fetch_array($result);
						$status=$row['status'];
							$result = mysqli_query($con,"select * from hosteliers where RegistrationNumber='$reg'") or die("error" . mysqli_error($con));

						$row=mysqli_fetch_array($result);
						$Hostel=$row['Hostel'];

					
				if($status==1)
				{
					echo "<img src='uploads/pro.jpg'>
					<form action='upload.php' method='POST' enctype='multipart/form-data'>
					<input type='file' name='file' >
					<button type='submit' name='submit'>UPLOAD</button>";
				}	
				else
				{
					$files=glob("uploads/profile".$reg.".*");
					$img=end($files);
					echo '<img src="'.$img.'">';
					//echo "<img src='uploads/profile".$reg.".jpg'>";
					/*echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
					<input type='file' name='file'>
					<button type='submit' name='submit'>CHANGE</button>";*/
				} 
    				$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    				if(strpos($fullUrl,"upload=empty")==true)
    				{
        				echo "<p> error while uploading!</p>";
    				}
    
				?>
			
		</div>
		<div class="details">
			<div class="index">
			Name:
		</div>
		<div class="info">
			<?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?>
		</div>
		<div class="index">
			Registration Number:
		</div>
		<div class="info">
			<?php echo $_SESSION['regnum']; ?>
		</div>
		<div class="index">
			Email-id:
		</div>
		<div class="info">
			<?php echo $_SESSION['email']; ?>
		</div>
		<div class="index">
			Date of Birth:
		</div>
		<div class="info">
			<?php echo $_SESSION['dob']; ?>
		</div>
		<div class="index">
			Postal Code:
		</div>
		<div class="info">
			<?php echo $_SESSION['pincode']; ?>
		</div>
		<div class="index">
			Mobile Number:
		</div>
		<div class="info">
			<?php echo $_SESSION['phnnum']; ?>
		</div>
		<div class="index">
			College:
		</div>
		<div class="info">
			<?php echo $_SESSION['college']; ?>
		</div>
		<div class="index">
			Fees:
		</div>
		<div class="info">
			<?php echo $_SESSION['hostelfees']; ?>
		</div>
		<div class="index">
			Hostel Name:
		</div>
		<div class="info">
			<?php echo $Hostel; ?>
		</div>
		<div class="index">
			Rating:
		</div>
		<div class="info">
			<?php echo $_SESSION['rating']; ?>
		</div>
	

		</div>
	</div>
</form>

</body>
</html>







