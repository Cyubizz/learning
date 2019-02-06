<?php

function test($nmb, $a){
    $res = 0;
    $count = strlen($nmb);
    $nmb = strval($nmb);
    for($i=0;$i<$count;$i++){
        if($nmb[$i] == $a){
            $res++;
        }
    }
    return $res;
}

echo test(123452542, 2);
