<?php
 /* є розміри товару (висота, ширина, глибина) і є розміри дверей,
треба розрахувати чи пройде товар у двері чі не пройде */

    $h_prod = $_POST['h_prod'];
    $w_prod = $_POST['w_prod'];
    $d_prod = $_POST['d_prod'];


    $h_door = $_POST['h_door'];
    $w_door = $_POST['w_door'];

    $door_perimeter = $h_door + $w_door;

    $prod_perimeter = [];
    $prod_perimeter[0] = $w_prod + $h_prod;
    $prod_perimeter[1] = $w_prod + $d_prod;
    $prod_perimeter[2] = $h_prod + $d_prod;

    foreach ($prod_perimeter as $v) {
        if ($v > $door_perimeter) {
            echo "товар не пройде у двері";
        } else {
            echo "товар пройде у двері";
        }
    }