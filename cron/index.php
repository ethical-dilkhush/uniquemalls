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
 $current_period = $current_period-1;
  
  //sum of 0
  $sql0 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='0' && section=1");
  $var0 = mysqli_fetch_assoc($sql0);
  if($var0['total'])
  {

  }

  else
  {
    $var0['total']='0';
  }

//sum of 1
$sql1 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='1' && section=1");
$var1 = mysqli_fetch_assoc($sql1);
if($var1['total'])
{

}

else
{
  $var1['total']='0';
}

//sum of 2
$sql2 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='2' && section=1");
$var2 = mysqli_fetch_assoc($sql2);
if($var2['total'])
{

}

else
{
  $var2['total']='0';
}

//sum of 3
$sql3 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='3' && section=1");
$var3 = mysqli_fetch_assoc($sql3);
if($var3['total'])
{

}

else
{
  $var3['total']='0';
}

//sum of 4
$sql4 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='4' && section=1");
$var4 = mysqli_fetch_assoc($sql4);
if($var4['total'])
{

}

else
{
  $var4['total']='0';
}

//sum of 5
$sql5 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='5' && section=1");
$var5 = mysqli_fetch_assoc($sql5);
if($var5['total'])
{

}

else
{
  $var5['total']='0';
}

//sum of 6
$sql6 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='6' && section=1");
$var6 = mysqli_fetch_assoc($sql6);
if($var6['total'])
{

}

else
{
  $var6['total']='0';
}

//sum of 7
$sql7 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='7' && section=1");
$var7 = mysqli_fetch_assoc($sql7);
if($var7['total'])
{

}

else
{
  $var7['total']='0';
}

//sum of 8
$sql8 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='8' && section=1");
$var8 = mysqli_fetch_assoc($sql8);
if($var8['total'])
{

}

else
{
  $var8['total']='0';
}

//sum of 9
$sql9 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='9' && section=1");
$var9 = mysqli_fetch_assoc($sql9);
if($var9['total'])
{

}

else
{
  $var9['total']='0';
}


//sum of green
$sql11 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='11' && section=1");
$var11 = mysqli_fetch_assoc($sql11);
if($var11['total'])
{

}

else
{
  $var11['total']='0';
}


//sum of voilet
$sql12 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='12' && section=1");
$var12 = mysqli_fetch_assoc($sql12);
if($var12['total'])
{

}

else
{
  $var12['total']='0';
}

//sum of red
$sql13 = mysqli_query($conn,"SELECT SUM(amount) As total FROM transactions where period='$current_period' && selection='13' && section=1");
$var13 = mysqli_fetch_assoc($sql13);

if($var13['total'])
{

}

else
{
  $var13['total']='0';
}



/*
 echo "<br>";
echo $current_period;
 echo "<br>";
 echo $var0['total'];
 echo "<br>";
 echo $var1['total'];
 echo "<br>";
 echo $var2['total'];
 echo "<br>";
 echo $var3['total'];
 echo "<br>";
 echo $var4['total'];
 echo "<br>";
 echo $var5['total'];
 echo "<br>";
 echo $var6['total'];
 echo "<br>";
 echo $var7['total'];
 echo "<br>";
 echo $var8['total'];
 echo "<br>";
 echo $var9['total'];

 echo "<br>c:";
 echo $var11['total'];
 echo "<br>c:";
 echo $var12['total'];
 echo "<br>c:";
 echo $var13['total'];
  echo "<br>";
 
 */
    
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
    $wingv =$win5+$win15;
    $winrv =$win0+$win14;
    
    /*
    print($winog);
    echo "<br>";
    print($winer);
    echo "<br>";
    print($wingv);
    echo "<br>";
    print($winrv);
    echo "<br>";
    */
    
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
        $number = 5;
    }
    
    else if($rs==$winrv)
    {
        $clr = 14;
     $number = 0;
    }
    
    /*
    echo "<br>";
    echo ($win0);
    echo "<br>";
    print($win1);
    echo "<br>";
    print($win2);
    echo "<br>";
    print($win3);
    echo "<br>";
    print($win4);
    echo "<br>";
    print($win5);
    echo "<br>";
    print($win6);
    echo "<br>";
    print($win7);
    echo "<br>";
    print($win8);
    echo "<br>";
    print($win9);
    echo "<br>";
    print($win11);
    echo "<br>";
    print($win13);
    echo "<br>";
    print($win14);
    echo "<br>";
    print($win15);
    echo "<br>";
    print($winog);
    echo "<br>";
    print($winer);
    echo "<br>";
    print($wingv);
    echo "<br>";
    print($winrv);
    echo "<br>";
    
    print($clr);
    echo "<br>";
    print($number);
    echo "<br>";
    
    if($win1<$win3 && $win1< $win7 && $win1<$win9)
    {
        $minodd=1;
    }
    else if($win3<$win1 && $win3< $win7 && $win3<$win9)
    {
            $minodd=3;
    }
    
    else if($win7<$win1 && $win7< $win3 && $win7<$win9)
    {
            $minodd=7;
    }
    
    else if($win9<$win1 && $win9< $win7 && $win9<$win3)
    {
            $minodd=9;
    }
    
    //min of even numbers
    if($win2<$win4 && $win2< $win6 && $win2<$win8)
    {
        $mineven=2;
    }
    else if($win4<$win2 && $win4< $win6 && $win4<$win8)
    {
            $mineven=4;
    }
    
    else if($win6<$win2 && $win6< $win4 && $win6<$win8)
    {
            $mineven=6;
    }
    
    else if($win8<$win2 && $win8< $win4 && $win8<$win6)
    {
            $mineven=8;
    }
    
    //min of 0 and 5
    
    if($win0<$win5)
    {
        $minsp=0;
    }
    
    else
    {
        $minsp=5;
    }
    
    //min from color
    if($win11<$win14 && $win11<$win15 && $win11<$win13 )
    {
        $mincl=11;
    }
    else if($win14<$win11 && $win14<$win15 && $win14<$win13 )
    {
        $mincl=14;
    }
    
    else if($win13<$win14 && $win13<$win15 && $win13<$win11 )
    {
        $mincl=13;
    }
    
    else if($win15<$win14 && $win15<$win13 && $win15<$win11 )
    {
        $mincl=15;
    }
    */
    
    
    
    
    /*
    //wining prediction 
    echo $win0=$var0*8;
    echo $win1=$var1*8;
    echo $win2=$var2*8;
    echo $win3=$var3*8;
    echo $win4=$var4*8;
    echo $win5=$var5*8;
    echo $win6=$var6*8;
    echo $win7=$var7*8;
    echo $win8=$var8*8;
    echo $win9=$var9*8;
    
    
    $win11=$var11*1.8;
    $win12=$var12*4.3;
    $win13=$var13*1.8;
    
    $win14=$win12+($var13*1.5); //voilet+red win amt
    $win15=$win12+($var11*1.5); //voilet+green win amt
    
    $minodd=min($win1,$win3,$win7,$win9);
    $mineven=min($win2,$win4,$win6,$win8);
    $minsp=min($win0,$win5);
    
    $mincl=min($win11,$win14,$win15,$win13);
    
    
    //total min
    $winog =$winodd+$win11;
    $winer =$wineven+$win13;
    $wingv =$winsp+$win15;
    $winrv =$winsp+$win14;
    
    $mintotal=min($winog,$winer,$wingv,$winrv);
    
      echo "<br>";
    echo $current_period;
     echo "<br>";
     echo $wintotal;
     
     echo $var0['total'];
     echo "<br>";
     echo $var1['total'];
     echo "<br>";
     echo $var2['total'];
     echo "<br>";
     echo $var3['total'];
     echo "<br>";
     echo $var4['total'];
     echo "<br>";
     echo $var5['total'];
     echo "<br>";
     echo $var6['total'];
     echo "<br>";
     echo $var7['total'];
     echo "<br>";
     echo $var8['total'];
     echo "<br>";
     echo $var9['total'];
    
     echo "<br>c:";
     echo $var11['total'];
     echo "<br>c:";
     echo $var12['total'];
     echo "<br>c:";
     echo $var13['total'];
     
     */
    
    /*
    //min of odd numbers
    if($win1<$win3 && $win1< $win7 && $win1<$win9)
    {
        $minodd=$win1;
    }
    else if($win3<$win1 && $win3< $win7 && $win3<$win9)
    {
            $minodd=$win3;
    }
    
    else if($win7<$win1 && $win7< $win3 && $win7<$win9)
    {
            $minodd=$win7;
    }
    
    else if($win9<$win1 && $win9< $win7 && $win9<$win3)
    {
            $minodd=$win9;
    }
    
    //min of even numbers
    if($win2<$win4 && $win2< $win6 && $win2<$win8)
    {
        $mineven=$win2;
    }
    else if($win4<$win2 && $win4< $win6 && $win4<$win8)
    {
            $mineven=$win4;
    }
    
    else if($win6<$win2 && $win6< $win4 && $win6<$win8)
    {
            $mineven=$win6;
    }
    
    else if($win8<$win2 && $win8< $win4 && $win8<$win6)
    {
            $mineven=$win8;
    }
    
    //min of 0 and 5
    
    if($win0<$win5)
    {
        $minsp=$win0;
    }
    
    else
    {
        $minsp=$win5;
    }
    
    //min from color
    if($win11<$win14 && $win11<$win15 && $win11<$win13 )
    {
        $mincl=$win11;
    }
    else if($win14<$win11 && $win14<$win15 && $win14<$win13 )
    {
        $mincl=$win14;
    }
    
    else if($win13<$win14 && $win13<$win15 && $win13<$win11 )
    {
        $mincl=$win13;
    }
    
    else if($win15<$win14 && $win15<$win13 && $win15<$win11 )
    {
        $mincl=$win15;
    }
    
    */
    
    
    
    
    
    
    /*
    
    
    //number prediction start
    if($var0['total']=='0' && $var1['total']=='0' && $var2['total']=='0' && $var3['total']=='0' && $var4['total']=='0' && $var5['total']=='0' && $var6['total']=='0' && $var7['total']=='0' && $var8['total']=='0' && $var9['total']=='0')
      {
        $out =(rand(0,9));
      }
    
    else
    {
        
        if($var0['total']=='0')
        {
          $out = '0';
        }
        
        else if($var1['total']=='0')
        {
          $out = '1';
        }
        
        else if($var2['total']=='0')
        {
          $out = '2';
        }
        
        else if($var3['total']=='0')
        {
          $out = '3';
        }
        
        else if($var4['total']=='0')
        {
          $out = '4';
        }
        
        else if($var5['total']=='0')
        {
          $out = '5';
        }
        
        else if($var6['total']=='0')
        {
          $out = '6';
        }
        
        else if($var7['total']=='0')
        {
          $out = '7';
        }
        
        else if($var8['total']=='0')
        {
          $out = '8';
        }
        
        else if($var9['total']=='0')
        {
          $out = '9';
        }
        
        else
        {
        
              if($var0['total']<$var1['total'] && $var0['total']<$var2['total'] && $var0['total']<$var3['total'] && $var0['total']<$var4['total'] && $var0['total']<$var5['total'] && $var0['total']<$var6['total'] && $var0['total']<$var7['total'] && $var0['total']<$var8['total'] && $var0['total']<$var9['total'] )
              {
                $out = '0';
              }
            
              else if($var1['total']<$var0['total'] && $var1['total']<$var2['total'] && $var1['total']<$var3['total'] && $var1['total']<$var4['total'] && $var1['total']<$var5['total'] && $var1['total']<$var6['total'] && $var1['total']<$var7['total'] && $var1['total']<$var8['total'] && $var1['total']<$var9['total'] )
              {
              $out = '1';
              }
            
              else if($var2['total']<$var1['total'] && $var2['total']<$var0['total'] && $var2['total']<$var3['total'] && $var2['total']<$var4['total'] && $var2['total']<$var5['total'] && $var2['total']<$var6['total'] && $var2['total']<$var7['total'] && $var2['total']<$var8['total'] && $var2['total']<$var9['total'] )
              {
                $out = '2';
              }
            
              else if($var3['total']<$var1['total'] && $var3['total']<$var2['total'] && $var3['total']<$var0['total'] && $var3['total']<$var4['total'] && $var3['total']<$var5['total'] && $var3['total']<$var6['total'] && $var3['total']<$var7['total'] && $var3['total']<$var8['total'] && $var3['total']<$var9['total'] )
              {
                $out = '3';
              }
            
              else if($var4['total']<$var1['total'] && $var4['total']<$var2['total'] && $var4['total']<$var3['total'] && $var4['total']<$var0['total'] && $var4['total']<$var5['total'] && $var4['total']<$var6['total'] && $var4['total']<$var7['total'] && $var4['total']<$var8['total'] && $var4['total']<$var9['total'] )
              {
                $out = '4';
              }
            
              else if($var5['total']<$var1['total'] && $var5['total']<$var2['total'] && $var5['total']<$var3['total'] && $var5['total']<$var4['total'] && $var5['total']<$var0['total'] && $var5['total']<$var6['total'] && $var5['total']<$var7['total'] && $var5['total']<$var8['total'] && $var5['total']<$var9['total'] )
              {
                $out = '5';
              }
            
              else if($var6['total']<$var1['total'] && $var6['total']<$var2['total'] && $var6['total']<$var3['total'] && $var6['total']<$var4['total'] && $var6['total']<$var5['total'] && $var6['total']<$var0['total'] && $var6['total']<$var7['total'] && $var6['total']<$var8['total'] && $var6['total']<$var9['total'] )
              {
                $out = '6';
              }
            
              else if($var7['total']<$var1['total'] && $var7['total']<$var2['total'] && $var7['total']<$var3['total'] && $var7['total']<$var4['total'] && $var7['total']<$var5['total'] && $var7['total']<$var6['total'] && $var7['total']<$var0['total'] && $var7['total']<$var8['total'] && $var7['total']<$var9['total'] )
              {
                $out = '7';
              }
            
              else if($var8['total']<$var1['total'] && $var8['total']<$var2['total'] && $var8['total']<$var3['total'] && $var8['total']<$var4['total'] && $var8['total']<$var5['total'] && $var8['total']<$var6['total'] && $var8['total']<$var7['total'] && $var8['total']<$var0['total'] && $var8['total']<$var9['total'] )
              {
                $out = '8';
              }
            
              else if($var9['total']<$var1['total'] && $var9['total']<$var9['total'] && $var9['total']<$var3['total'] && $var9['total']<$var4['total'] && $var9['total']<$var5['total'] && $var9['total']<$var6['total'] && $var9['total']<$var7['total'] && $var9['total']<$var8['total'] && $var9['total']<$var0['total'] )
              {
                $out = '9';
              }
            
              else
              {
                    if($var0['total']==$var1['total'] && $var1['total']==$var2['total'] && $var2['total']==$var3['total'] && $var3['total']==$var4['total'] && $var4['total']==$var5['total'] && $var5['total']==$var6['total'] && $var6['total']==$var7['total'] && $var7['total']==$var8['total'] && $var8['total']==$var9['total'] )
                    {
                     $out =(rand(0,9));
               
                     }
              
              }
       }
    
    }
    
    
    //color prediction start
    
    if($out == '2' || $out == '4' || $out == '6' ||$out == '8')
    {
        $color='13';
    }
    
    else if($out == '1' || $out == '3' || $out == '7' ||$out == '9')
    {
        $color='11';
    }
    
    else if($out=='0')
    {
        $color='14'; //voilet+red
    }
    
    else if($out=='5')
    {
        $color='15'; //voilet+green;
    }
    
    
    */
    
    /*
    if($var11['total']=='0' && $var12['total']=='0' && $var13['total']=='0')
    {
       $color =(rand(11,13));
    } 
    
    else
    {
        
        if($var11['total']=='0')
        {
          $color = '11';
        }
        
        else if($var12['total']=='0')
        {
          $color = '12';
        }
        
        else if($var13['total']=='0')
        {
          $color = '13';
        }
        
        else
        {
          if($var11['total']<$var12['total'] && $var11['total']<$var13['total'])
          {
            $color = '11';
          }
        
          else if($var12['total']<$var11['total'] && $var12['total']<$var13['total'])
          {
            $color = '12';
          }
        
          else if($var13['total']<$var12['total'] && $var13['total']<$var11['total'])
          {
            $color = '13';
          }
          
          else
          {
                if($var11['total']==$var12['total'] && $var12['total']==$var13['total'])
                {
                   $color =(rand(11,13));
                } 
          }
        
        } 
    
    }
    */

}
//giving to number selectors
$update = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='$number'  && section=1");

while($row = mysqli_fetch_array($update))
{
  $wall=$row['wallet_id'];
  $run = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wall'");
  $result = mysqli_fetch_assoc($run);
  $upd_bal = ($row['amount']*8)+$result['available_balance'];

  mysqli_query($conn,"UPDATE wallet SET available_balance='$upd_bal' where wallet_id='$wall'");
  mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='$number' && section=1");
}

//giving to color selectors
if($clr=='11')
{
    $query_color11 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='$clr' && section=1");
    while($row = mysqli_fetch_array($query_color11))
    {
      $wallet_d11=$row['wallet_id'];
      $r11 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d11'");
      $res11 = mysqli_fetch_assoc($r11);
      $updated_bal11 = ($row['amount']*1.9)+$res11['available_balance'];
    
      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal11' where wallet_id='$wallet_d11'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='$clr' && section=1");
    }

}

else if($clr=='13')
{
    $query_color13 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='$clr' && section=1");
    while($row = mysqli_fetch_array($query_color13))
    {
      $wallet_d13=$row['wallet_id'];
      $r13 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d13'");
      $res13 = mysqli_fetch_assoc($r13);
      $updated_bal13 = ($row['amount']*1.9)+$res13['available_balance'];
    
      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal13' where wallet_id='$wallet_d13'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='$clr' && section=1");
    }  
}

else if($clr=='14')
{
    $query_color14 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='13' && section=1");
    while($row = mysqli_fetch_array($query_color14))
    {
      $wallet_d14=$row['wallet_id'];
      $r14 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d14'");
      $res14 = mysqli_fetch_assoc($r14);
      $updated_bal14 = ($row['amount']*1.47)+$res14['available_balance'];
    
      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal14' where wallet_id='$wallet_d14'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='13' && section=1");
    } 
    
    $query_color15 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='12' && section=1");
    while($row = mysqli_fetch_array($query_color15))
    {
      $wallet_d15=$row['wallet_id'];
      $r15 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d15'");
      $res15 = mysqli_fetch_assoc($r15);
      $updated_bal15 = ($row['amount']*4.4)+$res15['available_balance'];
    
      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal15' where wallet_id='$wallet_d15'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='12' && section=1");
    } 
    
}

else if($clr=='15')
{
    $query_color16 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='11' && section=1");
    while($row = mysqli_fetch_array($query_color16))
    {
      $wallet_d16=$row['wallet_id'];
      $r16 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d16'");
      $res16 = mysqli_fetch_assoc($r16);
      $aaa=($row['amount']*1.47);
      $updated_bal16 = $aaa+$res16['available_balance'];

      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal16' where wallet_id='$wallet_d16'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='11' && section=1");
    } 
    
    $query_color17 = mysqli_query($conn,"SELECT wallet_id,amount From transactions where period='$current_period' && selection='12' && section=1");
    while($row = mysqli_fetch_array($query_color17))
    {
      $wallet_d17=$row['wallet_id'];
      $r17 = mysqli_query($conn,"SELECT * FROM wallet where wallet_id='$wallet_d17'");
      $res17 = mysqli_fetch_assoc($r17);
      $updated_bal17 = ($row['amount']*4.4)+$res17['available_balance'];
    
      mysqli_query($conn,"UPDATE wallet SET available_balance='$updated_bal17' where wallet_id='$wallet_d17'");
      mysqli_query($conn,"UPDATE transactions SET status='win' where period='$current_period' && selection='12' && section=1");
    } 
    
}


 mysqli_query($conn,"UPDATE transactions SET status='Loss' where period='$current_period' && status='0'");
 $price_query = mysqli_query($conn,"SELECT SUM(amount) AS price from transactions where period='$current_period' && section=1");
 $price_result = mysqli_fetch_array($price_query);
  $price = $price_result['price'];

 mysqli_query($conn,"INSERT INTO parity_records values('$current_period','$current_period','$price','$number','$clr')");
 
  
  
  
  
  


/*
 echo "<br>re:";
 echo $out;
 echo "<br>color:";
 echo $color;
 */
 
 
?>

