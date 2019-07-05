<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$contactnumber=$_POST['contactnumber'];
$Address=$_POST['Address'];
$bloodgroup=$_POST['bloodgroup'];
$save=$_POST['save'];
$status='on';

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

	

       $file=addslashes(file_get_contents($_FILES["img1"]["tmp_name"]));
$insertimage = "INSERT INTO createblooddonor(dname,demail,dcontactNo,daddress,dbloodGroup,dimg)
 VALUES ('$fullname','$email','$contactnumber','$Address','$bloodgroup','$file')";
    
	  $run_product= mysqli_query($conn,$insertimage);
	  if($run_product){
		  echo"<script>alert('image insert successfully')</script>";
	  }
}

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
  margin-left:550px;
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
  <br><br><br>
  <h3>Donor Information</h3>
  <label id="l2">Donor Name:</label><br><?php echo  $fullname;?>
  <br>
  <label id="l2">Email:</label><br><?php echo  $email;?>
  <br>

  <label id="l2">Contact No:</label><br><?php echo  $contactnumber;?>
  <br>
  <label id="l2">Address:</label><br><?php echo  $Address;?>
<br>
  <label id="l2">Blood Group:</label><br><?php echo  $bloodgroup;?>
  <br>
  <?php
  $query="Select dimg from createblooddonor";
$query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_array($query_run);
?>

  <label id="l2">Donor image:</label><br><br><?php echo '<img src="data:image;base64,'.base64_encode($row['dimg']).'" alt="Image" style="width:150px; height:150px;" >';?>



  </body>
  </html>

