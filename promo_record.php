<?php
session_start();
error_reporting(0);
include("connection.php");

$userphone = $_SESSION['phonenumber'];
 
if($userphone==true)
{

}

else
{
    header("location:login");
}

$id = $_SESSION['id'];
$q_recharge_records = "SELECT * from recharge where wallet_id = $id order by order_number DESC ";
$run_recharge_records = mysqli_query($conn,$q_recharge_records);
$total_rows_found = mysqli_num_rows($run_recharge_records);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Mall</title>
    <link rel="icon" href="/assets/site_logo.png" type="image/gif" sizes="32x32">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    *{
      margin: 0;
    }
    .u-div{
                height: 3.5em;
                background-color: #028881;
                width: 100%;
                position: absolute;
            }
            
            table {
  border-collapse: collapse; 
  width: 100%;
}

th,td {
    color:grey;
  padding: 6px;
  text-align:center;
  border-bottom: 1px solid #ddd;
}
</style>
<body  style="background-color: #f1f1f1; color: #333;">
    
    <div class="u-div">
        <div onclick="window.history.back()" style="margin: 12px;color: white;position: absolute;font-size: 20px;" >
            <span> <i class="far fa-chevron-left"></i>&nbsp&nbspPromotion Records</span>
            
        </div>
        
        <br>
        <br><br>
       

<?php 

    $checkuser=mysqli_query($conn,"SELECT * FROM users where rcode='$id'");
    $rf = mysqli_num_rows($checkuser);
    
     if($rf==0)
    {
      echo "<center>NO reffral FOUND!</center>";
    }
    
    else
    {
      
        ?>
        <div style="overflow-y:auto;background-color:white">

        <table style='color:black;' >
        <tr>

        <th>
        ID
        </th>
        
        <th>
        PHONE
        </th>

        
        
        <th>
        Recharge
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
         if($row['recharge_status']==0)
         {
             echo "₹0";
         }
         
         else
         {
             $w=$row['id_code'];
             $rech=mysqli_query($conn,"SELECT Sum(recharege_amount) AS r_amount from recharge where wallet_id='$w' && status=1");
             $total_r=mysqli_fetch_array($rech);
             echo "₹".$total_r['0'];
         }
        //echo "&emsp;".($row['recharge_status']);  // recharge status
        echo "</td>";
        
        
         

        echo "</tr>";
      }
      echo "</table>";  
      echo "</div>";
        
    }         
    
    
  
/*
if($total_rows_found==0)
{
  echo "<center style='margin:5%;'>No Data Found!</center>";
}

else
{
 ?>
 <br>
   <div style="overflow-y:scroll;height:auto">
        
   
  
      <?php
  while($row = mysqli_fetch_array($run_recharge_records))
  {
      
      echo "<table style='width:100%;'>";

    if($row[5]==0 || $row[5]==2)
    {
      $status = "/assets/recharge_wait.png";
      $status_tag = "Wait";
    }

    else
    {
      $status = "/assets/recharge_done.png"; 
      $status_tag = "Success";
    }


    echo "<td >";
    ?>
    <img src="<?php echo $status;?>" width="40" height="40">
    <?php
    echo "</td>";

    echo "<td>";
    echo "&emsp;".($row[3]);  // amount
    echo "</td>";

    echo "<td>";
    echo "&emsp;".$status_tag;  // status_tag
    echo "</td>";

    echo "<td>";
    $temp_date=$row[4];

    $temp_date=substr($temp_date,0,16);
    echo "&emsp;".$temp_date;  // date
    //echo "&emsp;".($row[4]);  // date
    echo "</td>";
    

    
    echo "</tr>";
     echo "</table>";
echo "<hr>";
    
    
  } 
  
}   
*/
?>
 </div>

</body>
</html>