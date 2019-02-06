<?php

$arr = range(20, 45);
$res = 0;
foreach($arr as $item){
    if(fmod($item, 5) == 0){
        $res += $item;
    }
}
echo $res;
