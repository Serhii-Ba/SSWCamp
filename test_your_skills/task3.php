<?php
/* сайт продає товари за звичайною ціною та зі знижкою,
знижкова ціна закінчується на ".99". Крім того є акція:
якщо в чеку більше трьох товарів то покупець платить лише за найдорожчій.
Треба розрахувати суму за товар. */

$shopping = array(40.99, 20.99, 10.99, 100);

function getAll ($arr)
{
    $countprod = 0;
    $sumprice = 0;
    $maxprice = $arr [0];
    foreach ($arr as $i) {
        if ($i - round($i, 0) < 0.99) {
            $countprod = $countprod + 1;
        }
        if ($maxprice < $i) {
            $maxprice = $i;
        }
        $sumprice += $i;
    }
    if ($countprod > 3) {
        $sumprice = $maxprice;
    } else $sumprice = $sumprice;

    return $sumprice;
}

print_r(getAll($shopping));
