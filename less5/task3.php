<?php
/*Створіть функцію обертання вліво та вправо, яка
повертає всі обертання рядка вліво та вправо.
Приклад:
leftRotations("abc") ➞ ["abc", "bca", "cab"]
rightRotations("abc") ➞ ["abc", "cab", "bca"]*/

function fun ($n) {
    $a = strlen($n); // повертає довжину строки
    $res[] = $n;
    for ($i=1; $i < $a; $i++) {
        $n = substr($n,1).substr($n, 0,1); //повертає частину строки
        $res [] = $n;
    }
    print_r($res);
}

echo fun ("abc");

function func ($n1) {
    $a1 = strlen($n1); //  повертає довжину строки
    $res1[] = $n1;
    for ($i=1; $i < $a1; $i++) {
        $n1 = substr($n1,-1).substr($n1, 0,2); //повертає частину строки
        $res1 [] = $n1;
    }
    print_r($res1);
}

echo func ("abc");
