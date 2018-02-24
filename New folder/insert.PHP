<?php
$Name=$_POST['Name'];
$Father_Name=$_POST['Father_Name'];
$Gender=$_POST['Gender'];
$ECA=$_POST['ECA'];
$City=$_POST['City'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'app1');
$q="INSERT INTO book(Name,Father_Name,Gender,ECA,City) values('$Name','$Father_Name','$Gender','$ECA','$City')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>insertion</title>
</head>
<body>
<h1>Addimission Form</h>
<p><?php if($status==1)
      echo "Addmission complete";
    else
      echo "Addmission failed";
  ?> </p>
<p>do you want to insert more record?</p>
<a href="ipcollege.php">click here</a>
</body>
</html>

