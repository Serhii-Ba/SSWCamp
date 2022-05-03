<?php
class Animals {

    public $food;

    public $location;

    public function makeNoise() {
        echo "Така тварина спить";
    }

    public function eat() {

    }
    public function sleep() {

    }
}

class Cat extends Animal {

    public $name = 'Кішка';

    public function may() {
        echo 'мяу';
    }
}

class Dog extends Animal {

    public $name = 'Собака';
}

class Horse extends Animal {

    public $name = 'Кінь';
}