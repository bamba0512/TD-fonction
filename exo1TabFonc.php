<?php
function dernierElement($tab=[]){
    return $last=end($tab);
}
echo dernierElement($tab=[1,2,3,5,9]);
