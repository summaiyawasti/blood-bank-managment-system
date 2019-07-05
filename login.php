<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username)||!empty($password))
{
}
else
{
echo"all fields are required";
die();
}
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="bdms";
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","bdms");
	$result = mysqli_query($conn,"SELECT * FROM registration WHERE userName='" . $_POST["username"] . "' and  adminPassword = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo"<script>alert('Invalid User  name or password')</script>";
	} else {
		echo"<script>alert(' you are successfully authenticated as a user')</script>";
	}


}