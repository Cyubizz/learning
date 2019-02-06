<?php

function test($nmb){
    if($nmb < 1924){
    return 'Год должен быть больше 1924!';
    }
    $arr = ["Крыса", "Бык", "Тигр", "Кролик", "Дракон", "Змея", "Лошадь", "Коза", "Обезъяна", "Петух", "Собака", "Свинья"];
    $year = 1924;
    while(true){
        if($nmb > $year){
            $year += 12;
        } else {
            break;
        }
    }
    $year -= 12;
    $nmb -= $year;
    return $arr[$nmb];
}

echo test(2004);
