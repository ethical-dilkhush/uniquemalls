<?php 
include("connection.php");

 
$qry = "select * from admins where id=1";
 $data=mysqli_query($conn,$qry);
 
 $createTable .= '<table>';
 $createTable .= '<tr>';
$createTable .= '<th>REFFRAL</th>';
$createTable .= '<th>SIGNUP</th>';
$createTable .= '<th>MIN-WITHDRAW</th>';
$createTable .= '<th>MIN-RECHARGE</th>';
$createTable .= '</tr>';
 
while($customerData=mysqli_fetch_array($data))
{
	$createTable .= '<tr>';
	$createTable .= '<td>'.$customerData['reffral_bonus'].'</td>';
	$createTable .= '<td>'.$customerData['signup_bonus'].'</td>';
	$createTable .= '<td>'.$customerData['min_withdraw'].'</td>';
	$createTable .= '<td>'.$customerData['min_recharge'].'</td>';
	$createTable .= '</tr>';	
}
 
$createTable .= '</table>';
 
echo $createTable;
 
?>