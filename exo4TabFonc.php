<?php
 function verficationPWD($pwd=[]){
    for($i=0;$i<=$pwd;$i++)
    {

        if(strlen($pwd)<8 && is_numeric($i) && strtoupper($i) && strtolower($i)){
            return $ver=false;
            echo $ver;
           }
    
        else {

            return $ver=true;
            echo $ver;
        }
    }
 echo verficationPWD($pwd=[Mcv23hgsjzb]);
