<?php

//На сайті поряд з новими речами
//продаються також і залишки товару. Товар,
//що йде зі знижкою, закінчується на ,99. Але
//магазин запустив додаткову акцію.
//Якщо в чеку більше 3 одиниць товару зі
//знижкою, то покупець платить лише за найдорожчий.
//Розрахуйте суму за товари.

function getSum($array) {
    $float_arr = [];
    $int_arr = [];
    foreach ($array as $arr) {
        if (!is_int($arr - intval($arr))) {
            $num = $arr;
            $whole = floor($num);
            $fraction = (string) $num - $whole;
            $new_name = (int) substr($fraction, strpos($fraction, '.') + 1);
            if ($new_name == 99) {
                $float_arr[] = $num;
            }
        } else {
            $int_arr[] = $arr;
        }
    }
    return (count($float_arr) >= 3) ? array_sum($int_arr) + max($float_arr) : array_sum($array);
}


echo getSum([2.99, 4.92, 3.99, 10, 0.22, 0.99, 5]);
// echo getSum([2.99, 4.92, 10, 0.22, 0.99, 5]);