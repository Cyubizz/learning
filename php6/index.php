<?php

function test($nmb){
    $int = 0;
    if($nmb <0 || $nmb > 60){
        return 'Задано неверное число';
    }
    while(true){
        $int += 3;
        if($int > $nmb){
            $res = 'Зеленый';
            break;
        }
        $int += 2;
        if($int > $nmb){
            $res = 'Красный';
            break;
        }
    }
    return $res;
}

echo test(13);
