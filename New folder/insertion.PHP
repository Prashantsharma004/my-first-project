<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'app');
$q="insert into book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>insertion form</title>
</head>
<body>
<h1 style="color:blue;text-transform:capitalize;"> book record managment</h1>
<p><?php 
              if($status==1)
            echo "record inserted";
              else 
            echo "insertion failed";
   ?> </p>
do you want to insert more record? <a href="insertionform.php">click here </a>
</body>
</html>