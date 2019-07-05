<?php
$bloodname=$_POST['bloodname'];
$description=$_POST['description'];
$save=$_POST['save'];
if(!empty($bloodname)||!empty($description))
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
 if(isset($_POST['save'])){
       
$sql = "INSERT INTO  addblood(bloodGroup,description )
        VALUES ('".$_POST["bloodname"]."','".$_POST["description"]."')";
    }

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=password] ,textarea,select{
  width: 100%;
  padding: 12px;
  border: 1.5px solid red;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
<!--textbox ki blue outline ko change karne ke lie ye code likha hae-->
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
   outline: none;
  
}
input[type=text]:hover
{
   border: 2.5px solid red;
}
textarea:hover
{
     border: 2.5px solid red;
}
select:hover
{
     border: 2.5px solid red;
}

input[type=submit] {
  background-color: #ed1010;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #f22e24;
}

.container {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px;
  max-width: 700px;
  padding-left: 140px;
  }
  input[type=text]:hover,input[type=password]:hover
{
   border: 2.5px solid red;
}
 
    .box2
{
  top: 10%;
  left:90%;
  float: right;
  background:#ED0707;
  width: 100px;
  height:700px;
  padding: 0px;
}
.box
{
    margin-top: 0px;
  left:0%;
  float: left;
  background:#ED0707;
  width: 100px;
  height:700px;
  padding-top: 0px;
}
h3
{
  font-size: 50px;
  font-weight: bold;
  font-family: "Georgia";
}
img
{
  margin-left: 20px;
}
.floatright
{
  float:right;
  margin-left:650px;
  margin-top:80px;
  position:absolute;

}
#l2
{
    font-weight: bold;
    font:30px;
}
</style>
<head>
  <title>Create blood stock</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


  <div class="box"></div>
  <div class="box2"></div> 
  <img src="images/b7.jpg" class="floatright" width="400" height="400" ></img>
  <div class="container">
  <br>
  <h3>Blood Group</h3>
  <label id="l2">Blood Group Name:</label><br><?php echo  $bloodname;?>
<br><br>
<label id="l2">Description:</label><br><?php echo  $description;?>
  <br><br>
  
  <br>
  </body>
  </html>