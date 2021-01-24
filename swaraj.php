<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Swaraj</title>
  <link rel="stylesheet" href="styleswaraj.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
  <span><h1 class="text-center">Swaraj(OBC) Hostel </h2></span>
 
    
   
    <div class="container">
      <div class="img-wrap">
        <img src="Capture.png">
        
      </div>
        <div class="col">
          <div class="list">
         <ul>
          <li>Fees: Rs.500/month</li>
          <li>Mess Facility: Available</li>
          <li>College: SOE,Marines</li>
            
     
              </ul>
              </div>
              <div class="contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6455271526934!2d76.32863181471201!3d10.046081192819607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c398960dd7b%3A0xac94ac8846635485!2sSWARAJ%20HOSTEL!5e0!3m2!1sen!2sin!4v1585767300968!5m2!1sen!2sin" width="150" height="150"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

              </div>
        </div>
       
      
    



 
         
         
        
      </div>
      <h2>Star Rating : 
        <?php 
        include('process.php');
        $hos='Sahara Hostel';
        $res = mysqli_query($con,"SELECT  AVG(Rating)    FROM  hosteliers  WHERE Hostel ='Panadans PG'") or die("error" . mysqli_error($con));
            $rw=mysqli_fetch_array($res);
            $ans=$rw['AVG(Rating)'];
                if($res!="error" && $ans!=0)
                            echo $ans;
                            else
                            echo 'No rating yet';
                            
     ?>
           <span class="fa fa-star checked"></span>
        </h2>
      <a href="https://hostels.cusat.ac.in/">
        <h2>click here to apply online</h2>
        </a>
  



	
</body>
</html>