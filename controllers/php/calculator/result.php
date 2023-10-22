<?php

use Core\Validator;

$inputs = [
     $_POST['1'],
     $_POST['2'],
     $_POST['3'],
     $_POST['4'],
     $_POST['5'],
     $_POST['6'],
];

$errors = [];

foreach( $inputs as $validate ) {
     if(!Validator::int($validate) ) {
          $errors['number'] = "Must input a number";
          break;
     }
}

if(!empty($errors)) {
     return view("php/calculator/index.view.php", [
          "errors"=> $errors,
          "title"=> "Calculator",
     ]);
}

$sum = 0;

foreach( $inputs as $number ) {
     $sum += $number;
}

$average = $sum / 6;

view("php/calculator/result.view.php", [
     "average"=> $average,
     "sum" => $sum
]);