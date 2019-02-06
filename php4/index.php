<?php

$arr = [];
for($i=0;$i<rand(5,15);$i++){
    $arr[] = rand(1, 100);
}

$minNumb = min($arr);
$maxNumb = max($arr);

$min = array_search($minNumb, $arr);
$max = array_search($maxNumb, $arr);

$arr[$min] = $maxNumb;
$arr[$max] = $minNumb;
