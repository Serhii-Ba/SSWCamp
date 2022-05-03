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
    public function makeNoise() {
        echo "Мяу-мяу";
    }
    public function eat() {

    }
}

class Dog extends Animal {

    public $name = 'Собака';
    public function makeNois() {
        echo "Гав-гав";
    }
    public function eat() {

    }
}

class Horse extends Animal {

    public $name = 'Кінь';
}

class Veterinarian {

}