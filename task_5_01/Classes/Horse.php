<?php

require_once('Classes\Animal.php');

class Horse extends Animal {
    protected $food = 'Морква';
    protected $animal = 'Кінь';

    public function makeNoise() {
        echo 'Іго-го';
    }

    public function eat() {
        echo ($this->food);
    }

    public function sleep() {
        echo ('Такий' . strtolower($this->animal) . 'спить');
    }
}