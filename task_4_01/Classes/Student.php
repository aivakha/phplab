<?php

class Student
{
    public $firstName;
    public $lastName;
    public $group;
    public $mark;


    public function getScholarship($mark) {
        return $mark == 5 ? 100 : 80;
    }

}