<?php
include("connection.php");
session_start();
error_reporting(0);

$od=$_GET['od'];
$wi=$_GET['wi'];
$am=$_GET['am'];


$get_balance= mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wi'");
  $balance = mysqli_fetch_assoc($get_balance);
  $new_balance = $balance['available_balance'];
  
   $addon=($am*10)/100;
  $new_balance = $new_balance - $am-$addon;
  
   $status_update = mysqli_query($conn,"UPDATE recharge SET status='2' where order_number='$od'");
   
    
   if($status_update)
    {
      $wallet_update = mysqli_query($conn,"UPDATE wallet SET available_balance='$new_balance' where wallet_id='$wi'");

      if($wallet_update)
      {
          echo '<script>alert("Paisa Wasool Bhainchod!!")</script>';
          echo '<script>window.location.href="allrecharge"</script>';

      }
      
      else
      {
           echo '<script>alert("error in paisa wasool!!")</script>';
          echo '<script>window.location.href="allrecharge"</script>';
      }
      
    }
    
    else
    {
         echo '<script>alert("status not updated!!")</script>';
          echo '<script>window.location.href="allrecharge"</script>';
    }
?>