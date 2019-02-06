<?php

function test($year){
    if($year <=0 || $year > 9999){
        return 'Введено неверное значение';
    }

    if((fmod($year, 4) == 0 && fmod($year, 100) != 0) || fmod($year, 400) == 0){
        return 'Невисокосный год';
    } else {
        return 'Невисокосный год';
    }
}

echo test(1400);
