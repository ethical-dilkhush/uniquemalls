

<?php
  session_start();
  include("connection.php");
  error_reporting(); 

  date_default_timezone_set("Asia/Kolkata");

  $h = date('H');
  $m = date('i');
  $s = date('s');

  $y = date('Y');
  $month = date('m');
  $day = date('d');
 
  $past = (60*60*$h)+(60*$m)+$s;
  $current = $past /180+1;
  $current_period = $y.$month.$day.$current;
  $current_period = (int)$current_period;
 //$current_period = $current_period-1;
 
  $current=(int)$current;
   echo "<center>";
 echo "Parity"."<br>";
 echo "current Period:$current";
 echo "<br>";
  
  //sum of 0
  $sql0 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='0' && section=2");
  $var0 = mysqli_fetch_assoc($sql0);
  if($var0['total'])
  {

  }

  else
  {
    $var0['total']='0';
  }

//sum of 1
$sql1 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='1' && section=2");
$var1 = mysqli_fetch_assoc($sql1);
if($var1['total'])
{

}

else
{
  $var1['total']='0';
}

//sum of 2
$sql2 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='2' && section=2");
$var2 = mysqli_fetch_assoc($sql2);
if($var2['total'])
{

}

else
{
  $var2['total']='0';
}

//sum of 3
$sql3 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='3' && section=2");
$var3 = mysqli_fetch_assoc($sql3);
if($var3['total'])
{

}

else
{
  $var3['total']='0';
}

//sum of 4
$sql4 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='4' && section=2");
$var4 = mysqli_fetch_assoc($sql4);
if($var4['total'])
{

}

else
{
  $var4['total']='0';
}

//sum of 5
$sql5 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='5' && section=2");
$var5 = mysqli_fetch_assoc($sql5);
if($var5['total'])
{

}

else
{
  $var5['total']='0';
}

//sum of 6
$sql6 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='6' && section=2");
$var6 = mysqli_fetch_assoc($sql6);
if($var6['total'])
{

}

else
{
  $var6['total']='0';
}

//sum of 7
$sql7 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='7' && section=2");
$var7 = mysqli_fetch_assoc($sql7);
if($var7['total'])
{

}

else
{
  $var7['total']='0';
}

//sum of 8
$sql8 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='8' && section=2");
$var8 = mysqli_fetch_assoc($sql8);
if($var8['total'])
{

}

else
{
  $var8['total']='0';
}

//sum of 9
$sql9 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='9' && section=2");
$var9 = mysqli_fetch_assoc($sql9);
if($var9['total'])
{

}

else
{
  $var9['total']='0';
}


//sum of green
$sql11 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='11' && section=2");
$var11 = mysqli_fetch_assoc($sql11);
if($var11['total'])
{

}

else
{
  $var11['total']='0';
}


//sum of voilet
$sql12 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='12' && section=2");
$var12 = mysqli_fetch_assoc($sql12);
if($var12['total'])
{

}

else
{
  $var12['total']='0';
}

//sum of red
$sql13 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='13' && section=2");
$var13 = mysqli_fetch_assoc($sql13);

if($var13['total'])
{

}

else
{
  $var13['total']='0';
}



 //wining prediction 
$win0=$var0['total']*8;
$win1=$var1['total']*8;
$win2=$var2['total']*8;
$win3=$var3['total']*8;
$win4=$var4['total']*8;
$win5=$var5['total']*8;
$win6=$var6['total']*8;
$win7=$var7['total']*8;
$win8=$var8['total']*8;
$win9=$var9['total']*8;

$win11=$var11['total']*1.8; //green
$win12=$var12['total']*4.3;
$win13=$var13['total']*1.8; //red

$win14=$win12+($var13['total']*1.5); //voilet+red win amt
$win15=$win12+($var11['total']*1.5); //voilet+green win 




//number prediction start
if($var0['total']=='0' && $var1['total']=='0' && $var2['total']=='0' && $var3['total']=='0' && $var4['total']=='0' && $var5['total']=='0' && $var6['total']=='0' && $var7['total']=='0' && $var8['total']=='0' && $var9['total']=='0' && $var11['total']=='0' && $var12['total']=='0' && $var13['total']=='0')
  {
    $number =(rand(0,9));
    
     if($number == '2' || $number == '4' || $number == '6' ||$number == '8')
    {
        $clr='13';
    }
    
    else if($number == '1' || $number == '3' || $number == '7' ||$number == '9')
    {
        $clr='11';
    }
    
    else if($number=='0')
    {
        $clr='14'; //voilet+red
    }
    
    else if($number=='5')
    {
        $clr='15'; //voilet+green;
    }
  }
  
  else{
      
      $minodd=min($win1,$win3,$win7,$win9);
      $mineven=min($win2,$win4,$win6,$win8);
      
    
    //number against minwin of odd
    if($minodd==$win1)
    {
        $outcomeodd=1;
    }
    else if($minodd==$win3)
    {
        $outcomeodd=3;
    }
    else if($minodd==$win7)
    {
        $outcomeodd=7;
    }
    else if($minodd==$win9)
    {
        $outcomeodd=9;
    }
    
    //number against minwin of even
    if($mineven==$win2)
    {
        $outcomeeven=2;
    }
    else if($mineven==$win4)
    {
        $outcomeeven=4;
    }
    else if($mineven==$win6)
    {
        $outcomeeven=6;
    }
    else if($mineven==$win8)
    {
        $outcomeeven=8;
    }
    
}


  
  $minsp=min($win0,$win5); 
    //number against minwin of 0 5
    if($minsp==$win0)
    {
        $outcomesp=0;
    }
    else if($minsp==$win5)
    {
        $outcomesp=5;
    }
    
    
    //total min
    $winog =$minodd+$win11;
    $winer =$mineven+$win13;
    $wingv =$minsp+$win15;
    $winrv =$minsp+$win14;
    
  
    
    $rs = min($winog,$winer,$wingv,$winrv);
    
    
    
    if($rs==$winog)
    {
        $clr = 11;
        $number = $outcomeodd;
    }
    
    else if($rs==$winer)
    {
        $clr =  13;
        $number = $outcomeeven;
    }
    
    else if($rs==$wingv)
    {
        $clr = 15;
        $number = $outcomesp;
    }
    
    else if($rs==$winrv)
    {
        $clr = 14;
     $number = $outcomesp;
    }
    
      echo "0:".$var0['total'];
     echo "<br>";
     echo "1:".$var1['total'];
     echo "<br>";
     echo "2:".$var2['total'];
     echo "<br>";
     echo "3:".$var3['total'];
     echo "<br>";
     echo "4:".$var4['total'];
     echo "<br>";
     echo "5:".$var5['total'];
     echo "<br>";
     echo "6:".$var6['total'];
     echo "<br>";
     echo "7:".$var7['total'];
     echo "<br>";
     echo "8:".$var8['total'];
     echo "<br>";
     echo "9:".$var9['total'];
    
     echo "<br>G:";
     echo $var11['total'];
     echo "<br>V:";
     echo $var12['total'];
     echo "<br>R:";
     echo $var13['total'];
     
 ?>

 


