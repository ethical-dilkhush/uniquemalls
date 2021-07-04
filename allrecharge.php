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

<title>Unique Mall</title>
<link rel="icon" href="/assets/site_logo.png" type="image/gif" sizes="32x32">
<!--<link rel="stylesheet" href="my_account.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
</script>
  
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
        &nbsp;&nbsp;&nbsp;&nbsp;<i onclick="openNav();" class="fa fa-bars" style="font-size:24px; margin-top: 19.5px; position: absolute;"></i><div style=" width:auto; margin-left:50px"><p>Recharge Department</p></div>
        </div>
        
        
     <div id="nav1" style="width:250px;height:100%;float:left;position:absolute;background-color:black;display:none">
         <div style="padding:10px;background-color:none"></div>
         <hr style="border:1px solid yellow;margin:0px">
         <div onclick="window.location.href='recharge_dept.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-home"></i>&nbsp;Home</div>
          <hr style="border:1px solid yellow;margin:0px">
       <div onclick="window.location.href='allrecharge.php'" style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;All Data</div>
          <hr style="border:1px solid yellow;margin:0px">
         <div style="padding:10px;margin-top:0px;font-size:20px;color:yellow"><i class="fa fa-bar-chart-o"></i>&nbsp;<a href="admin_logout" onclick="return confirm('Do you want to logout?')" style="width:70px;outline:none;text-decoration:none;color:yellow" >Logout</a></div>
         <hr style="border:1px solid yellow;margin:0px">
       
    </div>
           
    
<center>

<form action="" method="post">
<br>
<input type="submit" name="Show_all" class="logout_button" value="SHOW All Data">
</form>

<?php
  
  if(isset($_POST['Show_all']))
  {
      date_default_timezone_set("Asia/Kolkata");
      $date = date('Y-m-d');
      
    $inserting = mysqli_query($conn,"SELECT * FROM recharge  ORDER BY order_number DESC ");
    $records = mysqli_num_rows($inserting);

    if($records==0)
    {
      echo "NO DATA FOUND!";
    }

    else
    {
        ?>
        <div style="overflow:scroll;height:100%;width:100%">

        <table style='color:yellow;' border='1px'>
        <tr>

        <th>
        ORDER_NUMBER
        </th>

        <th>
        WALLET_ID
        </th>

        <th>
        UPI_ID
        </th>

        <th>
        AMOUNT
        </th>

        <th>
        DATE
        </th>
        
        <th>
        STATUS
        </th>

        <th colspan="2">
        UPDATE
        </th>
      
        </tr>

<?php
      while($row = mysqli_fetch_array($inserting))
      {


        echo "<tr>"; 
        echo "<td>";
        echo "&emsp;".($row['order_number']);  // order number
        echo "</td>";

        echo "<td>";
        echo "&emsp;".($row['wallet_id']);  // wallet id
        echo "</td>";

        echo "<td>";
        echo "&emsp;".($row['upi_id']);  // upi id
        echo "</td>";

        echo "<td>";
        echo "&emsp;".($row['recharege_amount']);  // amount
        echo "</td>";

        echo "<td>";
        echo "&emsp;".($row['date']);  // date
        echo "</td>";
        
         echo "<td>";
         if($row['status']==0)
         {
             echo "wait";
         }
         
         else if($row['status']==1)
         {
             echo "approved";
         }
         
         else if($row['status']==2)
         {
             echo "rejected";
         }
        
        echo "</td>";
        
        echo "<td>";
        echo "<a href='rcharge.php?od=$row[order_number]&wi=$row[wallet_id]&am=$row[recharege_amount]'>APPROVE</a>";
        echo "</td>";
        
        echo "<td>";
        echo "<a href='getbackrecharge.php?&wi=$row[wallet_id]&am=$row[recharege_amount]'>REJECT</a>";
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