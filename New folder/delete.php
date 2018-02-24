<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
 $index="b".$j;
if(isset($_POST[$index]))
  $b_id[$i]=$_POST[$index];
else
  $i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'app');
for($k=1;$k<=$size;$k++)
{ 
  $q="delete from book where bookid=".$b_id[$k];
  mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>deletion</title>
</head>
<body>
<h1 style="color:blue;text-transform:capitalize;">book record managment</h1>
<p><?php 
  echo $size."record deleted";
?></p>
go to home page <a href="home.php">click here</a>
</body>
</html>