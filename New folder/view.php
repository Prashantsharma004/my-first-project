<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'app');
$q="select* from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>view book record</title>
</head>
<body bgcolor=green>
<center>
<h1 style="color:blue;text-transform:capitalize;">book record managment</h1>
<table border="5px" width="400px" bgcolor="pink">
<tr>
<th>bookid</th>
<th>title</th>
<th>price</th>
<th>author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{ $row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['bookid'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['author'];?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>