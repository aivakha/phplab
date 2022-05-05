<?php
require_once('Classes\Veterinarian.php');
require_once('Classes\Dog.php');
require_once('Classes\Cat.php');
require_once('Classes\Horse.php');

$animals = [
    new Dog('Корм', 'Поле'),
    new Cat('Корм', 'Поле 2'),
    new Horse('Яблука', 'Поле 3')
];

$veterinarian = new Veterinarian();

foreach ($animals as $animal) {
    echo $veterinarian->treatAnimal($animal) . '<br>';
}

