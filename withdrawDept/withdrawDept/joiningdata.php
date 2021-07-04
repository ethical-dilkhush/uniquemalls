<?php 
include("connection.php");
 date_default_timezone_set("Asia/Kolkata");
 $date = date('Y-m-d');

//todays joining
 $sql =mysqli_query($conn,"SELECT count(user_id) FROM `users` AS total WHERE join_date='$date'");
  $todayresult=mysqli_fetch_array($sql);
   $data .= 'Todays Joining:';
 $data .= $todayresult['0'];
 
 //todays joining recharged
 $sql4 =mysqli_query($conn,"SELECT count(user_id) FROM `users` AS total WHERE join_date='$date' && recharge_status=1");
  $todayrechargeresult=mysqli_fetch_array($sql4);
  $data .= '<br>';
   $data .= 'Todays Joinings Recharged:';
 $data .= $todayrechargeresult['0'];
 
 //total joining
  $sql2 =mysqli_query($conn,"SELECT count(user_id) FROM `users` AS ur");
   $totalresult=mysqli_fetch_array($sql2);
$data .= '<br>';
$data .= 'Total Joining:';
$data .= $totalresult['0'];

//recharged users
  $sql3 =mysqli_query($conn,"SELECT count(user_id) FROM `users` AS ur where recharge_status=1");
   $rechargeresult=mysqli_fetch_array($sql3);
$data .= '<br>';
$data .= 'Recharged Users:';
$data .= $rechargeresult['0'];
 
 echo $data;

?>