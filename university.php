<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WELCOME</title>
  <link rel="stylesheet" href="styles4.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav>
<img src="logo1.jpg" class="logo">
            <ul><li class="User">HELLO
             <?php
               echo $_SESSION['fname']
               ?>
               <i  class="fa fa-caret-down" onclick="myFunction()"></i>
               <div id="myDropdown" class="dropdown-content">
                 <a href="user.php">Profile</a>
                 <a href="maint.htm">Rate Us</a>
                  <a href="maint.htm">Support Us</a>
                  </div>
                  
               </li>
               
                <li><a href="maint.htm">ABOUT US</a></li>
                <li><a href="contactpag2.html">CONTACT US</a></li>
                <li><a href="Main.htm">LOGOUT</a></li>
           
            
            </ul>
        </nav>
        <div class="cusat-hostels">
          <section class="unmissable-hostels">
            <h1>Welcome to HOSTEL INN</h1>
            <h2>Discover the incredible hostels in the heart of Kochi</h2>
            <div class="grid">
              <div class="card">
                <a href="sahara.php">
                  <div style="background-image: url('sahara.jpg');"></div>
                    <span class="img-text">Sahara Hostel</span>

</a>
</div>
<div class="card">
                <a href="#">
                  <div style="background-image: url('sagar.png');" ></div>
                    <span class="img-text">Sagar Hostel</span>

</a>
</div>
<div class="card">
                <a href="#">
                  <div style="background-image: url('siberia.png');" ></div>
                    <span class="img-text">Siberia Hostel</span>

</a>
</div>
<div class="card">
                <a href="swaraj.php">
                  <div style="background-image: url('swaraj.png');"></div>
                    <span class="img-text">Swaraj Hostel</span>

</a>
</div>
</div>
</section>
</div>
        
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('fa fa-caret-down')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
        </body>
        </html>