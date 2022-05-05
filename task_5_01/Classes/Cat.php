<?php

require_once('Classes\Animal.php');

class Cat extends Animal {
    protected $food = 'Риба';
    protected $animal = 'Кіт';

    public function makeNoise() {
        echo 'Мя-у';
    }

    public function eat() {
        echo ($this->food);
    }

    public function sleep() {
        echo ('Такий' . strtolower($this->animal) . 'спить');
    }
}