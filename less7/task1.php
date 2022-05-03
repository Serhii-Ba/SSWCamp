<?php
class Animal {

    public $food;
    public $location;
    public function makeNoise() {
        echo "така тварина говорить";
    }
    public function eat() {
        echo "така тварина їсть";
    }
    public function sleep() {
        echo "така тварина спить";
    }
}

class Cat extends Animal {

    public $food = "-рибу ";
    public $name = "кішка";
    public $location = "домашня";
    public function makeNoise() {
        echo "Мяу-мяу";
    }
    public function eat() {
        print_r($this->food);
    }
    public function sleep() {
        print_r($this->name + "тварина спить");
    }
}

class Dog extends Animal {

    public $food = "-м`ясо ";
    public $name = "собака";
    public $location = "домашня";
    public function makeNoise() {
        echo "Гав-гав";
    }
    public function eat() {
        print_r($this->food);
    }
    public function sleep() {
        print_r($this->name + "тварина спить");
    }
}

class Horse extends Animal {

    public $food = "-сіно ";
    public $name = "кінь";
    public $location = "домашня";
    public function makeNoise() {
        echo "Іго-го";
    }
    public function eat() {
        print_r($this->food);
    }
    public function sleep() {
        print_r($this->name + "тварина спить");
    }
}

class Veterinarian {

    public function treatAnimal (Animal $animal) {
        $animal->makeNoise();
        $animal->eat();
    }
}

$animals = [];
$animals[0] = new Cat();
$animals[1] = new Dog();
$animals[2] = new Horse();

for ($i=0; $i<3; $i=$i+1) {
    $v = new Veterinarian();
    $v->treatAnimal($animals[$i]);
}