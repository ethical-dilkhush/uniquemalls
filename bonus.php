<?php
include("connection.php");
session_start();
error_reporting(0);

$ad=$_GET['ad'];
$wi=$_GET['wi'];
$am=$_GET['am'];


  $get_balance= mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wi'");
  $balance = mysqli_fetch_assoc($get_balance);
  $new_balance = $balance['available_balance'];

  $new_balance = $new_balance + $am;
  
    $status_update = mysqli_query($conn,"UPDATE apply_bonus SET status='1' where apply_id='$ad'");
    
     if($status_update)
    {
      $wallet_update = mysqli_query($conn,"UPDATE wallet SET available_balance='$new_balance' where wallet_id='$wi'");

      if($wallet_update)
      {
        echo '<script>alert("WALLET AND STATUS UPDATED!")</script>';
        echo '<script>window.location.href="promotion_dept"</script>';

      }

      else
      {
        echo '<script>alert("WALLET NOT UPDATED!")</script>';
        echo '<script>window.location.href="promotion_dept"</script>';
      }

    }
    
     else
    {
      echo '<script>alert("STATUS NOT UPDATED!")</script>';
      echo '<script>window.location.href="promotion_dept"</script>';
    }

?>