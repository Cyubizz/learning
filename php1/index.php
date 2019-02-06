<?php
/**
 * Created by PhpStorm.
 * User: Филипенко
 * Date: 06.02.2019
 * Time: 13:53
 */

function test($nmb){
    $res = 0;
    $count = strlen($nmb);
    $nmb = strval($nmb);
    for($i=0;$i<$count;$i++){
        $res += $nmb{$i};
    }
    return $res;
}

echo test(999999999);
