<?php

$con=mysqli_connect("localhost","root","","projecthostelmanagement","3307");
$que=mysqli_query($con,"select * from hosteliers");
$rowcount=mysqli_num_rows($que);
for($i=1;$i<=$rowcount;$i++)
{
    $rows=mysqli_fetch_array($que);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
</head>
        <body>
            <h1>
                <?php
                echo $rows['RegistrationNumber'];
                ?>
                </h1>

    </body>
</html>