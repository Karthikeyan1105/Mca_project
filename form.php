<?php
$n=$_POST['name'];
$p=$_POST['regno'];
$e=$_POST['email'];
$con=mysqli_connect("localhost","root","","student");
$sql="INSERT INTO datas(student name,reg no,email) values('$n','$p',$e')";
$r=mysqli_query($con,$sql);
if($r)
{
	echo "STUDENT DETAILS ADDED SUCCESSFULLY";
}
else
{
	echo "STUDENTS DETAILS NOT ADDED
}
?>