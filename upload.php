<?php
include('process.php');
if(isset($_POST['submit']))

{
	$id=$_SESSION['regnum'];
	$file=$_FILES['file'];
	//	print_r($file);
	$filename=$_FILES['file']['name'];
	$filetype=$_FILES['file']['type'];
	$filesize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$filetempname=$_FILES['file']['tmp_name'];
	/*$data=file_get_contents($filename);
	file_put_contents(temp.jpg, $data);
	$filename=temp.jpg;*/

	$fileExt=explode('.', $filename);
	$fileActualExt=strtolower(end($fileExt));

	$allowed=array('jpg','jpeg','png','pdf');

	if(in_array($fileActualExt, $allowed))
	{
		if($fileError==0)
		{
			if($filesize<5000000000000000)
			{
				$fileNewName="profile".$id.".".$fileActualExt;
				$fileDestination='uploads/'.$fileNewName;
				move_uploaded_file($filetempname,$fileDestination);
				$sql="UPDATE profile SET status=0 WHERE RegistrationNumber='$id';";
				$result=mysqli_query($con,$sql);
				header('location:user.php');
			}
			else
			{
				echo "file size is big";
			}
		}
		else
		{
			echo "error while uploading the file" ;
		}
	}
	else
	{
		header("location:user.php?upload=empty");
  	  	exit();
	}
}












?>