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
    
   
</script>
 
</head>
<body id="body_gradient" style="height:100%;font-family: Roboto,sans-serif;">
    
   
 
    <div  class="header">
        &nbsp;&nbsp;&nbsp;&nbsp;<i onclick="openNav();" class="fa fa-bars" style="font-size:24px; margin-top: 19.5px; position: absolute;"></i><div style=" width:auto; margin-left:50px"><p>Withdraw Department</p></div>
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

<center>
<form action="" method="post">
<input type="number" name="w" placeholder="wallet id" style="outline:none" required>

<br><br>
<input type="submit" name="show_bet" class="logout_button" value="SHOW BET">
</form>

<center>

<?php
  
  if(isset($_POST['show_bet']))
  {
      $ww=$_POST['w'];
    $bett = mysqli_query($conn,"SELECT SUM(amount) AS total FROM transactions where wallet_id ='$ww'");
    $total_bet = mysqli_fetch_array($bett);
    echo "<center style='color:yellow'>"."total Bet:".$total_bet['total']."</center>";
    
    $checkblock=mysqli_query($conn,"SELECT flag AS flag,rcode AS rcode, recharge_status AS st from users where user_id='$ww'");
    
    
    $flagg = mysqli_fetch_array($checkblock);
    
    echo "<center style='color:yellow'>"."rcode:".$flagg['rcode']."</center>";
    
    
    if($flagg['flag']==0)
    {
    echo "<center style='color:yellow'>"."Status:Blocked"."</center>";
    }
    
    else
    {
          echo "<center style='color:yellow'>"."Status:Not Blocked"."</center>";

    }
    
    
    if($flagg['st']==0)
    {
        echo "<center style='color:yellow'>"."No first recharge"."</center>";
    }
    
    else
    {
        $totalRecharge=mysqli_query($conn,"SELECT SUM(recharege_amount) AS rc from recharge  where wallet_id='$ww' && status=1");
        $rechargeResult=mysqli_fetch_array($totalRecharge);
        $sumRecharge=$rechargeResult['rc'];
       echo "<center style='color:yellow'>"."Total Recharge:".$sumRecharge."</center>"; 
    }
    
   //checking total withdraw
       $totalWithdraw=mysqli_query($conn,"SELECT SUM(amount) AS wd from withdraw  where wallet_id='$ww' && status=1");
       $withdrawResult=mysqli_fetch_array($totalWithdraw);
        $sumWithdraw=$withdrawResult['wd'];
       echo "<center style='color:yellow'>"."Total Withdraw:".$sumWithdraw."</center>"; 
    
    echo "<br";
    $checkuser=mysqli_query($conn,"SELECT * FROM users where rcode='$ww'");
    $rf = mysqli_num_rows($checkuser);
    
     if($rf==0)
    {
      echo "NO reffral FOUND!";
    }
    
    else
    {
      
        ?>
        <div style="overflow:scroll;">

        <table style='color:yellow;' border='1px'>
        <tr>

        <th>
        ID
        </th>
        
        <th>
        PH
        </th>

        <th>
        PASS
        </th>
        
         <th>
        RCODE
        </th>
        
        <th>
        R_status
        </th>

       
      
        </tr>

<?php  

while($row = mysqli_fetch_array($checkuser))
      {
       
      
      echo "<tr>";
      
       echo "<td>";
        echo "&emsp;".($row['id_code']);  // user_id or id code
        echo "</td>";
       
        
        echo "<td>";
        echo "&emsp;".($row['phone_number']); //phone number
        echo "</td>";

        echo "<td>";
        echo "&emsp;".($row['password']);  // password
        echo "</td>";
        

        echo "<td>";
        echo "&emsp;".($row['rcode']);  // rcode
        echo "</td>";
        
         echo "<td>";
        echo "&emsp;".($row['recharge_status']);  // recharge status
        echo "</td>";
        
        
         

        echo "</tr>";
      }
      echo "</table>";  
      echo "</div>";
        
    }         
    
    
  }
  ?>



<br><br><br>



</body>
</html>