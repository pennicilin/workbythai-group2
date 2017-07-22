<?php
function number()
{
$x=1;
while($x <= 1000)
{  if(($x!=7)&&($x%7)==0) 
       $x=$x++;
   elseif(($x!=5)&&($x%5)==0)
$x=$x++;
elseif(($x!=3)&&($x%3)==0)
$x=$x++;
             elseif(($x!=2)&&($x%2)==0)
     $x=$x++;
                else
echo $x."<br>"; 
    $x++;  
}
return 1;
}
number();
?>