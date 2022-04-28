<?php
require_once('Classes\Student.php');
require_once('Classes\Aspirant.php');

$student = new Student();
$aspirant = new Aspirant();

// Task №1
function select($str, $num) {
    $str_array = explode(" ", $str);
    $new_arr = [];
    foreach ($str_array as $word) {
        if (strlen($word) < $num) {
            $new_arr[] = $word;
        }
    }

    return $new_arr;
}

// var_dump(select('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', 5));

// Task №2
function getMaxNumber($number) {
    $digits = str_split($number);
    rsort($digits);

    return implode('', $digits);
}

// var_dump(getMaxNumber(102213456789));

// Task №3
function from_left($string) {
    $array[] = $string;
    for ($i = 0; $i < strlen($string) - 1; $i++) {
        $string = substr($string, 1) . substr($string, 0, 1);
        $array[] = $string;
    }
    var_dump($array);
}

function from_right($string) {
    $array[] = $string;
    for ($i = 0; $i < strlen($string) - 1; $i++) {
        $string = substr($string, -1) . substr($string, 0, 2);
        $array[] = $string;
    }
    var_dump($array);
}

//from_left('abc');
//from_right('abc');

// Task №4
function getAverage($array) {
    $digit = array_filter($array);
    $average = array_sum($digit) / count($digit);

    return $average;
}

// Task №5
function countVowels($string) {
    $length = strlen($string);
    $j = 0;
    for ($i = 0; $i < $length; $i++) {
        $vowel = strtolower($string[$i]);
        if ($vowel == "a" || $vowel == "y" || $vowel == "u" || $vowel == "i" || $vowel == "e" || $vowel == "o") {
            $j++;
        }
    }

    return $j;
}

//echo countVowels('Celebration');
// echo countVowels('Palm');

// Task №6


echo $student->getScholarship(5);