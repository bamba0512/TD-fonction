<?php
 function verficationPWD($pwd){

    
     if(strlen($pwd)<8){
         return $ver=false;
         echo $ver;
        }
        else {

            return $ver=true;
            echo $ver;
        }
    }
 echo verficationPWD("12345678");
