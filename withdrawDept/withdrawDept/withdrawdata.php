<?php 
include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');


//todays joining
 $sql =mysqli_query($conn,"SELECT SUM(amount) FROM `withdraw` AS total WHERE time<'$date' && status=1");
  $totalresult=mysqli_fetch_array($sql);
   $data .= 'Total Withdrawal:';
 $data .= $totalresult['0'];
 
 /*
 date_default_timezone_set("Asia/Kolkata");
 
$date1 = date('Y-m-d');
//$day_before = date( 'Y-m-d', strtotime( $date1 . ' -1 day' ) );

$date1 .= ' 00:00:00';

 //todays joining
 $sql2 =mysqli_query($conn,"SELECT SUM(amount) FROM `withdraw` AS total WHERE time>'$date1' && status=1");
  $todayresult=mysqli_fetch_array($sql2);
    $data .= '<br>';
   $data .= 'Todays Withdrawal:';
 $data .= $todayresult['0'];
 
 */
 
 echo $data;

?>