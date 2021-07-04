<?php 
include("connection.php");

 
$qry = "select * from users where flag=0";
 $data=mysqli_query($conn,$qry);
 
 $createTable .= '<table>';
 $createTable .= '<tr>';
$createTable .= '<th>ID</th>';
$createTable .= '<th>PHONE</th>';
$createTable .= '<th>PASS</th>';
$createTable .= '<th>RCODE</th>';
$createTable .= '<th>JOIN ON</th>';
$createTable .= '</tr>';
 
while($customerData=mysqli_fetch_array($data))
{
	$createTable .= '<tr>';
	$createTable .= '<td>'.$customerData['user_id'].'</td>';
	$createTable .= '<td>'.$customerData['phone_number'].'</td>';
	$createTable .= '<td>'.$customerData['password'].'</td>';
	$createTable .= '<td>'.$customerData['rcode'].'</td>';
	$createTable .= '<td>'.$customerData['join_date'].'</td>';
	$createTable .= '</tr>';	
}
 
$createTable .= '</table>';
 
echo $createTable;
 
?>