<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$message=$_POST['message'];
$submit=$_POST['submit'];
$subject=$_POST['subject'];
if(!empty($firstname)||!empty($lastname)||!empty($message)||!empty($subject))
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

}
 if(isset($_POST['submit'])){
       
$sql = "INSERT INTO  contactus(	firstName,lastName,subject,	message)
        VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["subject"]."','".$_POST["message"]."')";
    }

if ($conn->query($sql) === TRUE) {
    echo"<script>alert(' Your request has been submitted successfully!')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>