<?php

function test($firstName, $name, $lastName){
    $name = mb_strtoupper($name[0]);
    $lastName = mb_strtoupper($lastName[0]);
    return $firstName . ' ' . $name . '. ' . $lastName . '.';
}

echo test(Тестовый, тест, Тестович);
