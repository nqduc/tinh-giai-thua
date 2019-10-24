<?php
echo "bài 1<br>";
$n = 5;  
$x = 1;
for($i=1; $i <= $n-1; $i++)  
{  
 $x*=($i+1);   
}  
echo "Giai thừa của $n = $x"."<br>";
function ham_tinh_giai_thua($n)  
		{  
		  if($n ==0)  
			{  
			   return 1;  
			}  
		  else   
			{     
			   return $n * ham_tinh_giai_thua($n-1);  
			}  
			}  
        echo "5! = " .ham_tinh_giai_thua(5)."<br>"
?>
 <?php 
 echo "bài 2<br>";
function ham_kiem_tra_so_nguyen_to($n)  
{  
 for($x = 2; $x < $n; $x++)  
{  
    if($n % $x ==0)  
{  
    return 0;  
}  
   }  
  return 1;  
}  
 $a = ham_kiem_tra_so_nguyen_to(3);  
 if ($a==0)  
   echo 'Đây không phải là số nguyên tố'."<br>";  
 else  
   echo 'Đây là số nguyên tố'."<br>";
 ?>