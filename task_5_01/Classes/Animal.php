<?php


class Animal {
    protected $food;
    protected $location;

    public function __construct($food, $location) {
        $this->food = $food;
        $this->location = $location;
    }

    public function makeNoise() {
        echo 'Така тварина говорить';
    }

    public function eat() {
        echo 'Така тварина їсть';
    }

    public function sleep() {
        echo 'Така тварина спить';
    }

    public function getFood() {
        return $this->food;
    }

    public function getLocation() {
        return $this->location;
    }

}