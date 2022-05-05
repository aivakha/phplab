<?php

require_once('Classes\Animal.php');

class Dog extends Animal {
    protected $food = 'Кістка';
    protected $animal = 'Собака';

    public function makeNoise() {
        echo 'Гав';
    }

    public function eat() {
        echo ($this->food);
    }

    public function sleep() {
        echo ('Така' . strtolower($this->animal) . 'спить');
    }
}