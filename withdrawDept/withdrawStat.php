<?php
include("connection.php");
session_start();
error_reporting(0);
$id = $_SESSION['admin_id'];

if($id==true);
else
header("location:admin_login");
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Orion Club</title>
<link rel="icon" href="/assets/site_logo.png" type="image/gif" sizes="32x32">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 
<!-- style section start -->
<style>
  /*iput fields icon color change to #954697*/
  /*text-indent:30px; to left the text in text fields*/


  input[type=text] {
background-position: 20px; 
background-size: 30px 30px;
background-repeat: no-repeat;
font-size: 16px;
width: 95%;
padding: 10px 15px;
margin-top: 20px;
margin-right: 10px;
box-sizing: border-box;
border: 2px white;
color:black;
}

#body_gradient {
  background-image: linear-gradient(to right,#434343 , #000000);
}


input[type=number] {
background-position: 20px; 
background-size: 30px 30px;
background-repeat: no-repeat;
font-size: 16px;
width: 95%;
padding: 10px 15px;
margin-top: 20px;
margin-right: 10px;
box-sizing: border-box;
border: 2px white;
color:black;
}


  /*login button in the middle*/
  .logout_button{
  background:yellow;
    border: none;
    color: black;
    padding: 10px 14px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
  border-radius: 2px;
  font-family:sans-serif;

  }
  .logout_button:hover{ /*when hover on login button change color*/
  background:#006600;
  }
    
    
    .header{
        background-color:#0081FF ;
        height: 3.5em;
        color: aliceblue;
    }
    
    .container{
	width:auto;
	margin:0 auto;
	border:1px solid #eeeeee;
	background:#ffffff;
	padding:10px;
	overflow-y:auto;
}
 
h1{
	text-align:center;
	color:#e31616;
	font-size:20px;
	
}
table{
	border:1px solid #eeeeee;
	border-collapse: collapse;
	width:100%;
}
 
table th{
	border:1px solid #eeeeee;
	text-align:center;
	color:#e31616;
	height:40px;
}
table td{
	border:1px solid #eeeeee;
	padding:5px;
}

</style>
<script>
var ind=0;
    function openNav()
    {
        if(ind==0)
        {
        document.getElementById("nav1").style.display="block";
        ind=1;
        }
        
        else
        {
            document.getElementById("nav1").style.display="none";
            ind=0;
        }
    }
    
    
	$(document).ready(function(){
		
		$.ajax({
			url: 'withdrawdata.php',
			success: function(data)
			
			{
				$("#customer-data").html(data);
			}
		})
	});
   
</script>
 
</head>
<body id="body_gradient" style="height:100%;font-family: Roboto,sans-serif;" onload="showBlocked()">
    
   
    

 
   
    <div  class="header">
        &nbsp;&nbsp;&nbsp;&nbsp;<i onclick="openNav();" class="fa fa-bars" style="font-size:24px; margin-top: 19.5px; position: absolute;"></i><div style=" width:auto; margin-left:50px"><p>Withdraw Data</p></div>
        </div>
           
        
    
     <div id="nav1" style="width:250px;height:100%;float:left;position:absolute;background-color:black;display:none">
         <div style="padding:10px;background-color:none"></div>
         <hr style="border:1px solid yellow;margin:0px">
         <div onclick="window.location.href='withdraw_dept.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-home"></i>&nbsp;Home</div>
          <hr style="border:1px solid yellow;margin:0px">
       <div onclick="window.location.href='joinStat.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;Joining Data</div>
          <hr style="border:1px solid yellow;margin:0px">
       <div onclick="window.location.href='rechargeStat.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;Recharge Data</div>
          <hr style="border:1px solid yellow;margin:0px">
       <div onclick="window.location.href='withdrawStat.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;withdrawal data</div>
        <hr style="border:1px solid yellow;margin:0px">
       <div  onclick="window.location.href='block-unblock.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;Block/Unblock</div>
         <hr style="border:1px solid yellow;margin:0px">
       <div onclick="window.location.href='bonusManager.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;Bonus Manager</div>
         <hr style="border:1px solid yellow;margin:0px">
         <div style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;<a href="admin_logout" onclick="return confirm('Do you want to logout?')" style="width:70px;outline:none;text-decoration:none;color:yellow" >Logout</a></div>
         <hr style="border:1px solid yellow;margin:0px">
       
    </div>
    
<br><br>
<center>

<div class="container">
	<div id="customer-data">
	</div>
</div>

<br><br><br>



</body>
</html>