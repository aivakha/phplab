<?php
require_once('Classes\Student.php');
require_once('Classes\Aspirant.php');

$student = new Student();
$aspirant = new Aspirant();



echo $student->getScholarship(5);