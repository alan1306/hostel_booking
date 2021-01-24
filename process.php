<?php
session_start();
$con=mysqli_connect("localhost","root","","projecthostelmanagement","3307");
//$RegistrationNumber="";
//$PhoneNo="";

if(isset($_POST["submit"]))
{
$RegistrationNumber = $_POST['reg_num'];
$PhoneNo=$_POST['phn_num'];

/*$username = stripcslashes($con,$username);
$password = stripcslashes($con,$password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);*/


//mysqli_select_db("login");

$result = mysqli_query($con,"select * from hosteliers where RegistrationNumber='$RegistrationNumber' and PhoneNo='$PhoneNo'") or die("error" . mysqli_error($con));

$row=mysqli_fetch_array($result);
if($row)
{
	$_SESSION['regnum']=$RegistrationNumber;
	$_SESSION['phnnum']=$PhoneNo;
	$_SESSION['email']=$row['EMail'];
	$_SESSION['fname']=$row['FirstName'];
    $_SESSION['lname']=$row['LastName'];
    $_SESSION['pincode']=$row['PIN'];
    $_SESSION['hostelfees']=$row['HostelFees'];
    $_SESSION['college']=$row['College'];
    $_SESSION['dob']=$row['DOB'];
    $_SESSION['hostel_name']=$row['Hostel'];
    $_SESSION['rating']=$row['Rating'];
if($row['RegistrationNumber']==$RegistrationNumber && $row['PhoneNo']==$PhoneNo){
    echo "<script language='javascript' type='text/javascript'>";
echo "alert('Login Successfull');";
echo "</script>";

$URL="hostel.php";
echo "<script>location.href='$URL'</script>";
}
}
else{
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Login Failed!!!');";
    echo "</script>";
    
    $URL="login.php";
    echo "<script>location.href='$URL'</script>";
} 
}
if(isset($_POST['Register'])){
             $RegNum= $_POST['RegNum'];
             $firstname  =$_POST['firstname'];
             $lastname  =$_POST['lastname'];
             $email  =$_POST['email'];
             
             $PIN=$_POST['PIN'];
             $phonenumber  =$_POST['phonenumber'];
             $hostel=$_POST['hostel'];
             $fees=$_POST['fees'];
             $college=$_POST['college'];
             $rating=$_POST['rating'];
             $dob=$_POST['dob'];
             
             if(!empty($hostel)&&!empty($rating)){
            
             $sql="INSERT INTO hosteliers(RegistrationNumber,FirstName,LastName,EMail,PIN,PhoneNo,Hostel,HostelFees,College,DOB,Rating) VALUES($RegNum,'$firstname','$lastname','$email',$PIN,$phonenumber,'$hostel',$fees,'$college','$dob',$rating)";
             $sql2="INSERT INTO profile(RegistrationNumber,status) VALUES($RegNum,1)";
             mysqli_query($con,$sql2);
            }
             else{

                $sql="INSERT INTO hosteliers(RegistrationNumber,FirstName,LastName,EMail,PIN,PhoneNo,HostelFees,College,DOB,Rating) VALUES($RegNum,'$firstname','$lastname','$email',$PIN,$phonenumber,$fees,'$college','$dob',$rating)";
            $sql2="INSERT INTO profile(RegistrationNumber,status) VALUES($RegNum,1)";
                 mysqli_query($con,$sql2);
            }
             if(mysqli_query($con,$sql)){
                $result = mysqli_query($con,"select * from hosteliers where RegistrationNumber='$RegNum'") or die("error" . mysqli_error($con));

                $row=mysqli_fetch_array($result);
                $_SESSION['regnum']=$RegNum;
	$_SESSION['phnnum']=$phonenumber;
	$_SESSION['email']=$row['EMail'];
	$_SESSION['fname']=$row['FirstName'];
    $_SESSION['lname']=$row['LastName'];
    $_SESSION['pincode']=$row['PIN'];
    $_SESSION['hostelfees']=$row['HostelFees'];
    $_SESSION['college']=$row['College'];
    $_SESSION['dob']=$row['DOB'];
    $_SESSION['hostel_name']=$row['Hostel'];
    $_SESSION['rating']=$row['Rating'];
       echo "<script language='javascript' type='text/javascript'>";
       echo "alert('Registration Successfull');";
       echo "</script>";
       
       $URL="hostel.php";
       echo "<script>location.href='$URL'</script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>";
echo "alert('Registration Failed');";
echo "</script>";

$URL="reg1.php";
echo "<script>location.href='$URL'</script>";
            }
         }

?>