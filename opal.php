<?php
include('hostelregistration.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>opal homes</title>
  <link rel="stylesheet" href="opalstyle.css">
  
  

  
</head>
<body>
  <form action="hostelregistration.php" method="POST">
  <span><h1 class="text-center">Opal Homes</h2></span>
 
    
   
    <div class="container">
      <div class="img-wrap">
        <img src="opalhomes.jpeg">
        
      </div>
        <div class="col">
          <div class="list">
         <ul>
              <li>Fees:Rs.700/month</li>
              <li>3 Storeyed Building with about 100 Rooms</li>
              <li> Non-Veg/Veg.Food to Choose From</li>
              <li> Wi-Fi facility in all rooms</li>
              <li> 24 Hours Hostel Security</li>
            
     
              </ul>
              </div>
              <div class="contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6623499082643!2d76.32810381479457!3d10.044696192820544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d6762b71a6f%3A0xf3d9a68bb7005175!2sOpal%20Homes%20Hostel!5e0!3m2!1sen!2sin!4v1586087888481!5m2!1sen!2sin" width="150" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

              </div>
        </div>   
      </div>
        <?php
  //$hostel=$_SESSION['hostel_name'];
  //if(empty($hostel)):
    $result = mysqli_query($con2,"select * from opal") or die("error" . mysqli_error($con2));
        $row=mysqli_fetch_array($result);
  ?>
        <div class="rooms">
    <h1>Rooms Available</h1>
    <?php if($row['nonac_room']!=0):?>

        <input type="checkbox" id="non_ac" name="opal_non_ac" value="non_ac">
  <label for="non_ac">Non-AC:&emsp;<?php 
        
        echo $row['nonac_room'];
        ?></label><br>
    <?php endif; ?>
    <?php if($row['ac_room']!=0):?>
  <input type="checkbox" id="ac" name="opal_ac" value="ac">
  <label for="ac">AC:&emsp;&emsp;&emsp;&ensp;<?php 
        echo $row['ac_room'];
        ?></label><br>
    <?php endif; ?>
        <input type="submit" value="Book Now" >
  </div>

    
    




</form>
	
</body>
</html>            
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
