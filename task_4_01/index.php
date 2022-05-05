<?php
require_once('Classes\Student.php');
require_once('Classes\Aspirant.php');

$students = [
    new Student('Alex', 'Parnak', '1PI-20B', 5),
    new Student('Mykola', 'Melnyk', '2PI-21B', 2),
    new Aspirant('Sergiy', 'Martsenuk', '5PI', 4),
    new Aspirant('Anastasia', 'Melnychenko', '4PI', 3),
];

foreach ($students as $student)  {
    echo 'Student: ' . $student->firstName . ' ' .
        $student->lastName . '<br>' . 'Group: ' .
        $student->group . '<br>' . 'Mark: ' .
        $student->mark . '<br>' . 'Scholarship: ' .
        $student->getScholarship($student->mark) . '<br><br>';
}