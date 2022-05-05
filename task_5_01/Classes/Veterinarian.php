<?php

class Veterinarian {
    public function treatAnimal(Animal $animal) {
        return $animal->getFood() . ' ' . $animal->getLocation();
    }
}