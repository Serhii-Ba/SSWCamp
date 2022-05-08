<?php
/*Створіть приклад успадкування, реалізуйте клас Student та клас Aspirant,
аспірант відрізняється від студента наявністю якоїсь наукової роботи

Клас Student містить змінні firstName lastName group,
а також Mark, що містить середню оцінку

Створити об'єкт типу Student, яка посилається на об'єкт типу
Aspirant

Створити метод getScholarship для класу Student, який
повертає суму стипендії Якщо середня оцінка студента дорівнює 5
то сума 100 грн або 80 Перевизначити цей метод у класі Aspirant
Якщо середня оцінка аспіранта становить 5 то сума 200 грн інакше
180

Створити масив типу Student, що містить об'єкти класу Student
та Aspirant Викликати метод getScholarship для кожного елемента
масиву*/

class Student {
    public $firstName;
    public $lastName;
    public $group;
    public $mark; //середня оцінка
    public $scientific; //наукова робота
    public $scholarship; //стипендія

    function __construct($Fn,$Ln,$Gr,$Mk,$Sc){
        $this->firstName=$Fn;
        $this->lastName=$Ln;
        $this->group=$Gr;
        $this->mark=$Mk;
        $this->scientific=$Sc;
    }
    public function getScholarship (){
          if ($this->mark!=5) {
             return $this->scholarship=80; }
          else return $this->scholarship=100;
    }
}

class Aspirant extends Student {
    public $firstName;
    public $lastName;
    public $group;
    public $mark; //середня оцінка
    public $scientific; //наукова робота
    public $scholarship;

    public function getScholarship (){
        if ($this->mark!=5) {
            return $this->scholarship=180; }
        else return $this->scholarship=200;
    }
}

$student1 = new Student('John','Student',1,4,null);
$student1->getScholarship();
$aspirant1 = new Aspirant('Mike','Aspirant',2,4,546);
$aspirant1->getScholarship();
$student2 = new Student('Taras','Student1',1,5,null);
$student2->getScholarship();
$aspirant2 = new Aspirant('Ivan','Aspirant',2,5,547);
$aspirant2->getScholarship();

$students = array($student1,$student2,$aspirant1,$aspirant2);

var_dump($students);
