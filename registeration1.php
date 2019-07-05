<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$contactnumber=$_POST['contactnumber'];
$fullname=$_POST['fullname'];
$country=$_POST['country'];
$city=$_POST['city'];
$Address=$_POST['Address'];
$save=$_POST['save'];
if(!empty($username)||!empty($password)||!empty($email)||!empty($contactnumber)||!empty($fullname)||!empty($city)||!empty($country)||!empty($Address))
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

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error())
{
	die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
echo"connection successful";
}
 if(isset($_POST['save'])){
       
$sql = "INSERT INTO  registration(userName,adminEmail,adminPassword,
adminName,admincontactNo,adminaddress,country,city)
        VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["fullname"]."','".$_POST["contactnumber"]."','".$_POST["Address"]."','".$_POST["country"]."','".$_POST["city"]."')";
    }

if ($conn->query($sql) === TRUE) {
    echo"<script>alert(' you are successfully registered as a user')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>