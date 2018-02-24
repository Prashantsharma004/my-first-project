<?php
$size=sizeof($_POST);
$record=$size/4;
for($i=1;$i<=$record;$i++)
{
$index1="bookid".$i;
$bookid[$i]=$_POST[$index1];
$index2="title".$i;
$title[$i]=$_POST[$index2];
$index3="price".$i;
$price[$i]=$_POST[$index3];
$index4="author".$i;
$author[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'app');
for($i=1;$i<=$record;$i++)
{
$q="update book set title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>updation</title>
</head>
<body>
<h1 style="color:blue;text-transform:capitalize;">book record managment</h1>
<p><?php 
  echo $size."record updated";
?></p>
go to home page <a href="home.php">click here</a>
</body>
</html>