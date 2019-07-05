<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
table{
border-collapse:collapse;
margin-top: 50px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 110px;

}

table th{
text-align:left;
background-color:#ba0000;
color:#ffffff;
padding: 10px 60px;
}
table td{
border:1px solid #d62f15;
padding: 50px 50px;
}

.box
{
	top: 10%;
	left:30%;
	float: left;
	background:#ba0000;
	width: 60px;
	height:565px;
	padding: 0px;
}
.box2
{
	top: 10%;
	left:90%;
	float: right;
	background:#ba0000;
	width: 60px;
	height:565px;
	padding: 0px;


}

body
{
	
	background: white;
    overflow: scroll;
	
}
*
{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	
	
}

 
.searchbox
{
	position: absolute;
	top: 10%;
	left:75%;
    transform: translate(-50%,-50%);
    background: #2f3640;
    height:50px;
    border-radius: 120px;
    padding: 10px;
    text-decoration:none;
    border: 1px solid #FE0202;
}
.searchbutton:hover > .searchbox


{
	border: 3px solid #FE0202;
}
.searchbutton
{
	color:#FE0202;
	float:right;
	width:30px;
	height: 30px;
	border-radius: 50%;
	background:#2f3640; 
	display: flex;
	justify-content: center;
	align-items: center;
	text-decoration: none;
}
.searchtext
{
	border: none;
	background: none;
	outline: none;
	float: left;
	padding: 0;
	color:white;
	font-size: 16px;
	line-height: 25px;
	width:0px;
}
.searchbox:hover > .searchtext
{
	width: 240px;
	padding: 0 6px;
}
.searchbox:hover > .searchbutton
{
	background: white;
	text-decoration: none;
	border: 3px solid #FE0202;
 
}

.searchbutton:hover > .searchbox
{
	border:3px solid #FE0202;
}


.nav
{
	
	background: #ba0000;
	padding: 10px,0px;
	text-align: center;
	list-style: none;
	 

} 


.mainmenu >li
{
	display: inline-block;
	padding: 10px,0px;
	margin-left: 10px;
	margin-top: 15px;
	border-left: 2px solid white;
	border-left-width: 2px;
	width:140px;
	height: 40px;
	text-align: center;
	letter-spacing: 2px;
	font-family: "Georgia";
	font-size: 16px;
	color: black;
	text-transform: uppercase;
	transition: 4s;
	font-weight: 800px;
	line-height: 30px;
	
	}
.submenu
{
	display: none;
	width: 300px;
	list-style-type: none;
	position: absolute;
	border: 5px solid white;
	margin-top: 30px;
	margin-left: -10px;
	text-align: left;
	box-shadow: 1px,1px,1px #ED0707;

}
.submenu >li
{
	padding: 10px;
	color:white;
	background:  #ba0000;
	font-size: 15px;
	text-align: left; 
	box-shadow: 1px,1px,1px #ED0707;


}
.submenu:before
{
	content: '';
	width: 0px;
	height: 0px;
	border-left: 20px solid transparent;
	border-right:  20px solid transparent;
	border-bottom:  30px solid white;
	position: absolute;
	margin: -30px 0px 0px 60px;


}
.head
{
	background: white;
	color:#ED0707;
	padding: 10px 60px;
	font-size: 120%;
	border-top: 15px solid #FE0202 ;
	font-family: "Georgia";
	font-weight: 2000px;
	letter-spacing: 2px;
}
.mainmenu li:hover,.submenu li:hover
{
	background: #db0909;


}
.mainmenu li:hover .submenu
{
	display: block;
}
.mainmenu >li >a
{
	text-decoration: none;
	color:white;
}
.submenu >li >a
{
	text-decoration: none;
	color: white;
}

#bubbles{

width:auto; 
margin:0px auto;
padding-left: 1050px;
top: 200px;
 }
#bubbles > div{
 display:inline-block;
  width:15px;
 height:13px;
  margin:20px 20px 0px 20px; 
     margin-top: 4px;
	background:rgba(0,0,0,.1);
	 text-align:center;
	  border:2px solid #999;
 border-radius:100%; 
 font-size:17px; 
text-decoration:none; 
transition: background 0.3s linear 0s;
 cursor:pointer;

	}
#bubblecontent{ margin:0px ; 
	transition:opacity 0.3s linear 0s; 
	font-family: Arial;
}
	*
	{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
.footer-main-div
{
	width: 100%;
	height: auto;
	margin: auto;
	background: #272727;
	padding: 20px 0px;
}
.footer-social-icons
{
	width: 100%;
	height: auto;
	margin: auto;
}
.footer-social-icons ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;
}
.footer-social-icons ul li
{
	display: inline-block;
	width:50px;
	height: 50px;
	margin: 0 10px;
	border-radius: 100%;
	background: #ED0707;

}
.footer-social-icons ul li:hover
{
	background: red;
}
.footer-social-icons ul li a
{
	color: #fff;
}
.footer-social-icons ul li:hover a
{
color: #fff;
}
.footer-social-icons ul li a
{
	color: #fff;
	font-size: 25px;
}
.footer-social-icons ul li a i
{
	line-height: 50px;

}
.footer-menu-one
{
	width: 100%;
	height: auto;
	margin:auto;
	margin-top: 25px;

}
.footer-menu-one ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;

}
.footer-menu-one ul li
{
display: inline-block;
margin: 0px 20px;
}
.footer-menu-one ul li a
{
font-family: arial;
font-size: 16px;
font-weight: 600;
color: #fff;
padding-top: 5px;
}
.footer-menu-two
{
	width: 100%;
	height: auto;
	margin:auto;
	margin-top: 15px;

}
.footer-menu-two ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;

}
.footer-menu-two ul li
{
display: inline-block;
margin: 0px 20px;
}
.footer-menu-two ul li a
{
font-family: arial;
font-size: 16px;
font-weight: 600;
color: #fff;
padding-top: 5px;
}
.footer-bottom
{
	width: 100%;
	height: auto;
	margin:auto;
	background: #D50101;
	padding: 5px;	
}
.footer-top
{
	width: 100%;
	height: 20px;
	margin:auto;
	background: #D50101;
	padding: 5px;
	
}
.footer-bottom p
{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: #fff;
	font-weight: 600px;
	letter-spacing: 1px;
}
footer-bottom p a
{
	color: #fff;

}
footer-bottom p a:hover
{
	color: #272727;

}
.footer-menu-two ul li a:hover
{
	color: #272727;
}
.footer-menu-one ul li a:hover
{
	color: #D50101;
}
.footer-menu-one ul li a
{
text-decoration: none;
}


@media(max-width: 600px)
{
   nav,.mainmenu li,.submenu li
	{
	float: none;
	width: 100%;
	text-align: left;
	font-size: 30px;
	font-weight: bold;
	}
	.head
	{

		border-top: 10px solid #FE0202 ;
		font-size: 15px;
		text-align: left;
		padding-bottom:2px;
		padding-top: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}
	.mainmenu li
	{
		border-left: none;

	}
	.submenu 
	{
      width: 200px;
	}
	.submenu >li
	{
		font-size:14px;   
	}
    .submenu : before
    {
    	border-left: 20px solid transparent;
	border-right:  20px solid transparent;
	border-bottom:  30px solid white;
	position: absolute;
	margin: -20px 0px 0px 60px;
    }


}
/*footer*/
*
{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	
	
}.footer-main-div
{
	width: 100%;
	height: auto;
	margin: auto;
	background: #272727;
	padding: 20px 0px;
}
.footer-social-icons
{
	width: 100%;
	height: auto;
	margin: auto;
}
.footer-social-icons ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;
}
.footer-social-icons ul li
{
	display: inline-block;
	width:50px;
	height: 50px;
	margin: 0 10px;
	border-radius: 100%;
	background: #ED0707;

}

.footer-social-icons ul li:hover
{
	background: red;
}
.footer-social-icons ul li a
{
	color: #fff;
}
.footer-social-icons ul li:hover a
{
color: #fff;
}
.footer-social-icons ul li a
{
	color: #fff;
	font-size: 25px;
}
.footer-social-icons ul li a i
{
	line-height: 50px;

}
.footer-menu-one
{
	width: 100%;
	height: auto;
	margin:auto;
	margin-top: 25px;

}
.footer-menu-one ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;

}
.footer-menu-one ul li
{
display: inline-block;
margin: 0px 20px;
}
.footer-menu-one ul li a
{
font-family: arial;
font-size: 16px;
font-weight: 600;
color: #fff;
padding-top: 5px;
}
.footer-menu-two
{
	width: 100%;
	height: auto;
	margin:auto;
	margin-top: 15px;

}
.footer-menu-two ul
{
	margin: 0px;
	padding: 0px;
	text-align: center;

}
.footer-menu-two ul li
{
display: inline-block;
margin: 0px 20px;
}
.footer-menu-two ul li a
{
font-family: arial;
font-size: 16px;
font-weight: 600;
color: #fff;
padding-top: 5px;
}
.footer-bottom
{
	width: 100%;
	height: auto;
	margin:auto;
	background: #D50101;
	padding: 5px;	
}
.footer-top
{
	width: 100%;
	height: 20px;
	margin:auto;
	background: #D50101;
	padding: 5px;
	
}
.footer-bottom p
{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: #fff;
	font-weight: 600px;
	letter-spacing: 1px;
}
footer-bottom p a
{
	color: #fff;

}
footer-bottom p a:hover
{
	color: #272727;

}
.footer-menu-two ul li a:hover
{
	color: #272727;
}
.footer-menu-two ul li a
{
	text-decoration: none;
}
.footer-menu-one ul li a:hover
{
	color: #D50101;
}
.footer-menu-one ul li a
{
text-decoration: none;
}


</style>
</head>
<body>
<div class="box"></div>
	<div class="box2"></div>
	
	<div class="nav">
		<ul class="mainmenu">
			<li><a href="#">HOME</a></li>
			<li><a href="aboutus.html">ABOUT US</a></li>
			<li><a href="#">ADD NEW</a>
			<ul class="submenu">
					<li><a href="addbloodgroup.html">blood group</a></li>
					<li><a href="createbloodstock.html">blood stock</a></li>
					<li><a href="createbloodsells.html">blood sells</a></li>
					<li><a href="createdonor.html"> blood doners</a></li>
				</ul>	
			<li><a href="#">reports</a>
				<ul class="submenu">
					<li><a href="bloodstockreport.php">blood stock</a></li>
					<li><a href="bloodsells.php">blood sells</a></li>
					<li><a href="donorreport.php">blood donors</a></li>
				</ul>
			<li><a href="contact us edited.html">contact us</a></li>
			<li><a href="#">register</a>
				<ul class="submenu">
					<li><a href="registeration1.html">CREATE NEW ACCOUNT</a></li>
					<li><a href="login.html">LOG IN</a></li>
					<li><a href="#">CHANGE PASSWORD</a></li>
				</ul>
			<li><a href="#">log out</a></li>

		</ul>
	</div>	


<h1 style="margin-top:10px;">&nbsp;&nbsp;&nbsp;Donor Report</h1>
<form action="" method="POST" enctype="multipart/form-data">
<table>
<tr>
    <th>Photo</th>
    <th>Name</th>
    <th>Email</th>
    <th>Blood Group</th> 
    <th>Mobile Number</th>
</tr>
<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "bdms");
  // Check connection
$query="Select * from createblooddonor";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
<td><?php echo '<img src="data:image;base64,'.base64_encode($row['dimg']).'" alt="Image" style="width:150px; height:150px;" >';?></td>
<td><?php echo $row['dname'];?></td>
<td><?php echo $row['demail']; ?></td>
<td><?php echo $row['dbloodGroup']; ?></td>
<td><?php echo $row['dcontactNo']; ?></td>
</tr>
<?php
}
?>
</table>
</form>

<div class="footer-top"></div>
  <section id="footer">
  <div class=" footer-main-div">
	<div class="footer-social-icons">
	<ul>
		<li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
		<li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
		<li><a href="#" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
		<li><a href="#" target="blank"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>
<div class="footer-menu-one">
	<ul>
		<li><a href="#">HOME</a></li>
		<li><a href="#">CONTACT US</a></li>
		<li><a href="#">REPORTS</a></li>
		<li><a href="#">ABOUT US</a></li>
		<li><a href="#">ADD NEW</a></li>
	</ul>
</div>
<div class="footer-menu-two">
	<ul>
		<li><a href="#">BLOGS</a></li>
		<li><a href="#">NEWS</a></li>
		<li><a href="#">GALLERY</a></li>
		<li><a href="#">MEDIA</a></li>
	</ul>
</div>
</div>
<div class="footer-bottom">
	<p>Design by:<a href="#">Smart Minds</a></p>
</div>
</section>
</body>
</html>