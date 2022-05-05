<?php

class Aspirant extends Student
{
    public function __construct($firstName, $lastName, $group, $mark) {
        parent::__construct($firstName, $lastName, $group, $mark);
    }

    public function getScholarship($mark) {
        return $mark == 5 ? 100 : 80;
    }
}
