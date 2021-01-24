<?php
$con2=mysqli_connect("localhost","root","","rent","3307");
include('process.php');
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$regnum=$_SESSION['regnum'];
if(isset($_POST["panadans_non_ac"])||isset($_POST["panadans_ac"]))
{
if(isset($_POST["panadans_non_ac"]))
{
	mysqli_query($con2,"update panadans set nonac_room=nonac_room-1")  or die("error" . mysqli_error($con2));
	 //$sql2="INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES($fname,$lname,$regnum,Non-AC)";
    // mysqli_query($con2,$sql2);
     	//mysqli_query($con2,"INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES('$fname','$lname','$regnum','Non-AC')")  or die("error" . mysqli_error($con2));

      echo "<script> alert('Room Booked Sucessfully!');window.location='hostel.php'</script>";

}
else if(isset($_POST["panadans_ac"]))
{
	$result=mysqli_query($con2,"update panadans set ac_room=ac_room-1")  or die("error" . mysqli_error($con2));
	//$sql2="INSERT INTO details(FirstName,LastName,type) VALUES($fname,$lname,AC)";
    //mysqli_query($con2,$sql2);
   //mysqli_query($con2,"INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES($fname,$lname,$regnum,'AC')")  or die("error" . mysqli_error($con2));
          echo "<script> alert('Room Booked Sucessfully!');window.location='hostel.php'</script>";


}
$sql2="update hosteliers set Hostel='Panadans' where RegistrationNumber='$regnum'";
mysqli_query($con,$sql2);
}
if(isset($_POST["opal_non_ac"])||isset($_POST["opal_ac"]))
{
if(isset($_POST["opal_non_ac"]))
{
  mysqli_query($con2,"update opal set nonac_room=nonac_room-1")  or die("error" . mysqli_error($con2));
   //$sql2="INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES($fname,$lname,$regnum,Non-AC)";
    // mysqli_query($con2,$sql2);
      mysqli_query($con2,"INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES('$fname','$lname','$regnum','Non-AC')")  or die("error" . mysqli_error($con2));

      echo "<script> alert('Room Booked Sucessfully!');window.location='hostel.php'</script>";

}
else if(isset($_POST["opal_ac"]))
{
  $result=mysqli_query($con2,"update opal set ac_room=ac_room-1")  or die("error" . mysqli_error($con2));
  //$sql2="INSERT INTO details(FirstName,LastName,type) VALUES($fname,$lname,AC)";
    //mysqli_query($con2,$sql2);
   // mysqli_query($con2,"INSERT INTO details(FirstName,LastName,RegistrationNumber,type) VALUES($fname,$lname,$regnum,'AC')")  or die("error" . mysqli_error($con2));
          echo "<script> alert('Room Booked Sucessfully!');window.location='hostel.php'</script>";


}
$sql2="update hosteliers set Hostel='opal' where RegistrationNumber='$regnum'";
mysqli_query($con,$sql2);
}
//$_SESSION['hostel_name']=$row['Hostel'];
?>

