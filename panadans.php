<?php
include('hostelregistration.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panadans</title>
	<link rel="stylesheet" type="text/css" href="panadanstyle.css">
</head>
<body>
	<form action='hostelregistration.php' method="POST">
<div class="title">
	PANADANS HOSTEL
</div>
<div class="pic">
	<img src="panah.png">
</div>
<div class="details">
	<p>Our hostel is open to all who are currently persuing undergraduate courses in cochin university of science and technology.Our hostel consist of total of 20 rooms which can accomodate total of 20 students.Out of the 20 rooms 5 are air conditioned.Mess facility is available if required.</p>
	</div>
	<div class="info">
		<div class="title">
			DETAILS
		</div>
		<div class="content">
		<ul>
		<li>Rent:&emsp;&emsp;&emsp;&emsp;5000(Non-Ac) & 8000(Ac)</li>	
		<li>Mess fees:&ensp;&ensp;&ensp;3000 per month</li>
		<li>Current bill:</li>
		<li>Water bill:</li>
		</ul>
	</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6272357233984!2d76.33183875059103!3d10.047586892783297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c3bed7dad09%3A0xd099ee96961ae70e!2sPanadans%20Hostel!5e0!3m2!1sen!2sin!4v1585814816528!5m2!1sen!2sin" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<?php
	//$hostel=$_SESSION['hostel_name'];
	//if(empty($hostel)):
		$result = mysqli_query($con2,"select * from panadans") or die("error" . mysqli_error($con2));
        $row=mysqli_fetch_array($result);
	?>
	<div class="rooms">
		<h1>Rooms Available</h1>
		<?php if($row['nonac_room']!=0):?>

        <input type="checkbox" id="non_ac" name="panadans_non_ac" value="non_ac">
  <label for="non_ac">Non-AC:&emsp;<?php 
        
        echo $row['nonac_room'];
        ?></label><br>
    <?php endif; ?>
    <?php if($row['ac_room']!=0):?>
  <input type="checkbox" id="ac" name="panadans_ac" value="ac">
  <label for="ac">AC:&emsp;&emsp;&emsp;&ensp;<?php 
        echo $row['ac_room'];
        ?></label><br>
    <?php endif; ?>
        <input type="submit" value="Book Now" >
	</div>
	<?php// endif; ?>
</form>
</body>
</html>