<?php

function name ($a,$b=0){
   $c=$a+$b;
   $d=$a*$b;
   $e=$a/$b;
   $f=$a%$b;
return [$c,$d,$e,$f];
}




// var_dump(name(4,5)); 
list($sum,$Zarb,$taghsim,$Baghi)=name(1,2);

echo "sum: $sum , zarb: $Zarb , taghsim: $taghsim , baghimande: $Baghi";


?>