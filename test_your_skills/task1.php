<?php
/* є загальна вартість речей (200,200,1), є франшиза від страхової (400),
треба розрахувати яку суму повернути в разі якщо речі вкрадено -
різніцю між загальною вартістю та франшизою */

function insurance ($things, $q) {
   return array_sum($things)-$q;
}

class stuff {
    public $things = [];
    public function __construct($things) {
        $this->things =$things;
    }
    public function getThings() {
        return $this->things;
    }
}

$things = new stuff(
    ['skate'=>200,
     'painting'=>200,
     'shoes'=>1,
    ]
);

var_dump(insurance($things->getThings(),400));
