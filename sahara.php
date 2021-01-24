<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>SAHARA VIBEZZz</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
		
		
		.container{
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100vh;
				animation: animate 45s ease-in-out infinite;
				background-size: cover;
			}


			


			@keyframes animate{
				0%,100%{
					background-image: url(1.jpeg);
				}
				15%{
					background-image: url(2.jpeg);
				}
				40%{
					background-image: url(3.jpeg);
				}
				55%{
					background-image: url(4.jpeg);
				}
				70%{
					background-image: url(5.jpeg);
				}
				85%{
					background-image: url(6.jpeg);
				}
			}
		body{
			text-align: center;
			font-family: sans-serif;
		}
		h1{
			color: brown;
			font-size: 90px;
			text-shadow: 2px 2px lightblue;
			font-weight: bold;
			font-family: cursive;
			background-color: lightblue;

		}
		h2{
			color: blue;
			font-size: 30px;
		}
		pre{
			color: black;
			font-size: 25px;
			font-style: all;
			border-radius: 25px;
			border-color: green;
			text-align: left;
			text-shadow: 2px 2px white;
		}
		.checked {
  color: orange;
}
		.logo,.logo2,.face,.ins{
			position: absolute;
  			width: 100%;
  			
		}

		.logo img
  			{
  			width: 220px;
  			height: 90px;
  			margin-left: 1100px;
  			margin-top: 70px;
  		}

  		.logo2 img
  		{
  			width: 90px;
  			height: 90px;
  			margin-left: -1140px;
  			margin-top: 70px;
  		}

  		 .map
  		{
  			top:75%;
  			left: 2%;

  			position: absolute;
  		}
  		.face img
  		{
  			width: 140px;
  			height: 140px;
  			margin-left: 1290px;
  			margin-top: 350px;
  		}
  		.ins img
  		{
  			width: 140px;
  			height: 140px;
  			margin-left: 1290px;
  			margin-top: 540px;
  		}
  		

	</style>


</head>



<body>

	<div class="container">
		<h1>SAHARA HOSTEL</h1>


	
		<pre>
					Hostel accommodation for around 300 students
					is available for Undergraduate/ Postgraduate 
					and Research students.There is also sufficient
					parking facility for bicycles and two wheelers.
					There are two different Mess facilities for 
					students to choose from, depending on their 
					tastes(north indian / south indian)

					->  Hostel fee  -  300 /month
					->  Mess fee    -  3500/month (north indian)
					                -  2500/month (south indian)
					->  Water, Electricity charges extra. 

		</pre>
		<h2>Star Rating 
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

	</div>

	
	
	<div class="logo">
		<img src="101.jpg">
	</div>

	<div class= "logo2">
		<img src="100.jpg">
	</div>

	<div class= "face">
		<a href="https://www.google.co.in/maps/uv?hl=en&pb=!1s0x3b080c39fe74f3c3%3A0x1c6b2a11564fce3d!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNeJMYV0J2iHGel2pb819QaZchlIytcouMT3Vbx%3Dw355-h200-k-no!5ssahara%20hostel%20-%20Google%20Search!15sCAQ&imagekey=!1e10!2sAF1QipNeJMYV0J2iHGel2pb819QaZchlIytcouMT3Vbx&sa=X&ved=2ahUKEwiHnevr7MnoAhVCQH0KHRNeCCoQoiowC3oECBkQBg">
		<img title="open gallery" src="fb.jpeg">
		</a>
	</div>

	<div class= "ins">
		<a href="https://www.instagram.com/sahara_hostel_cusat/?hl=en">
		<img title="open instagram" src="insta.jpeg">
		</a>
	</div>

	

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.647492557654!2d76.32702511479464!3d10.045919392819705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c39fe74f3c3%3A0x1c6b2a11564fce3d!2sSahara%20Hostel%20for%20Boys!5e0!3m2!1sen!2sin!4v1585824676496!5m2!1sen!2sin" width="140" height="140" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

</body>

</html>