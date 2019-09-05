<?php

function findMin(){
    $arr=[1,2,3,4,5,6,7,8,9,10,11,12];
    $min=$arr[0];
   for ($i=0;$i<count($arr);$i++){
    if ($min<$arr[i]){
        $min=$arr[i];
    }

   }
   echo $min;
}
findMin();