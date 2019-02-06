<?php

function test($nmb){
    $nmb -= 6;
    $arr = ["Шестерка", "Семерка", "Восьмерка", "Девятка", "Десятка", "Валет", "Дама", "Король", "Туз"];
    if($nmb < 0 || $nmb > count($arr) - 1) {
        return 'Введено неверное значение';
    }
    return $arr[$nmb];
    }

echo test(5);
