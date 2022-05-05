<?php

class Student
{
    public $firstName;
    public $lastName;
    public $group;
    public $mark;

    public function __construct($firstName, $lastName, $group, $mark) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->mark = $mark;
    }

    public function getScholarship($mark) {
        return $mark == 5 ? 100 : 80;
    }

}