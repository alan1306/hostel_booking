<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>
<nav>
<img src="logo1.jpg" class="logo">
            <ul><li><a href="Main.htm">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="login.php">LOGIN</a></li>
            
            </ul>
        </nav>
<form action="process.php" method="post">
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
    <div class="inputfield">
          <label for="RegNum">Registration Number</label>
          <input type="number_format" name="RegNum" class="RegNum" required>
       </div> 

       <div class="inputfield">
          <label for="firstname">First Name</label>
          <input type="text" name="firstname" class="firstname" required>
       </div>  
        <div class="inputfield">
          <label for="lastname">Last Name</label>
          <input type="text" name="lastname" class="lastname"
          required>
       </div>  
       <div class="inputfield">
          <label for="dob">Date of Birth</label>
          <input type="date" name="dob" class="dob"
          required>
       </div> 
       <!--<div class="inputfield">
          <label for="password">Password</label>
          <input type="password" name="password" class="password" required>
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" required>
       </div> -->
        
      
        <div class="inputfield">
          <label for="email">Email Address</label>
          <input type="text" name="email" class="email" required>
       </div> 
      <div class="inputfield">
          <label for="phonenumber">Phone Number</label>
          <input type="text" name="phonenumber" class="phonenumber" required>
       </div> 
      
      <div class="inputfield">
          <label for="PIN">Postal Code</label>
          <input type="text" name="PIN" class="PIN" required>
       </div> 
       <div class="inputfield">
          <label for="hostel">Hostel</label>
          <select type="text" id="hostel" name="hostel" class="hostel" required>
          <option value="" disabled selected>Select the hostel</option>        
  <option value="Sahara Btech Hostel">Sahara Btech Hostel</option>
  <option value="Swaraj Hostel">Swaraj Hostel</option>
  <option value="Sagar Hostel">Sagar Hostel</option>
  <option value="Siberia Hostel">Siberia Hostel</option>
  <option value="Opal Hostel">Opal Hostel</option>
  <option value="Dream Boys Hostel">Dream Boys Hostel</option>
  <option value="Panadans Hostel">Panadans Hostel</option>
  <option value="Ashiyana Hostel">Ashiyana Hostel</option>
  <option value="Panadans PG">Panadans PG</option>
  <option value="Trojans PG">Trojans PG</option>
  <option value="EC flat">EC flat</option>

</select>
       </div> 
       <div class="inputfield">
          <label for="rating">Hostel Rating(out of 5)</label>
          <input type="text" name="rating" class="rating"
          required>
       </div>
       <div class="inputfield">
          <label for="fees">Fees</label>
          <input type="text" name="fees" class="fees" required>
       </div> 
       <div class="inputfield">
          <label for="college">College</label>
          <input type="text" name="college" class="college" required>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" name="Register" value="Register">
      </div>
    </div>
</div>	
</form>
	
</body>
</html>