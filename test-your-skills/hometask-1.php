<?php

//Івана Іванова обікрали. Але його речі було
//застраховано на певну суму. Враховуючи
//вкрадені речі та обмеження страховки,
//поверніть різницю між загальною вартістю
//цих речей та межею політики.
//function({ skate: 200, painting: 200, shoes: 1 },
//400) ➞ 1

class Trunk {
    private $things = array();

    function __construct($things) {
        $this->things = $things;
    }

    function get_overall_sum() {
        return array_sum($this->things);
    }
}

function get_diff(Trunk $trunk, $insurance_limit) {
    $diff = $trunk->get_overall_sum() - $insurance_limit;
    return $diff;
}

$trunk = new Trunk([
    'scate' => 200,
    'painting' => 200,
    'shoes' => 1
]);

echo get_diff($trunk, 200);