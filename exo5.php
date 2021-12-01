<?php
 function PlusPetit($arg1,$arg2,$arg3){
     $min=0;
     if(($arg1<$arg2)&&($arg1<$arg3)){
         return $min=$arg1;
     }
     if(($arg2<$arg1)&&($arg2<$arg3)){
         return $min=$arg2;
     }
     if(($arg3<$arg1)&&($arg3<$arg2)){
         return $min=$arg3;
     }
     
 }
 echo PlusPetit(4,2,1);
