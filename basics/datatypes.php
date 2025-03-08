<?php

//  declare varibale with dollar sign cause its a worst langugae


// echo PHP_EOL  for new line 

$saMyName = "Vivek";
echo $saMyName;

echo PHP_EOL;
// DataTypes in PHP
// 1. String

$saMyName = "Vivek";
echo $saMyName . PHP_EOL ;

// 2. Integer
$inMyAge = 21;  
echo $inMyAge;

// 3. Float

$flMySalary = 0.00;
echo $flMySalary ;

// 4. Boolean

$isEmployed = false;
echo $isEmployed;

// true represent 1 and false represent 0 ; returns nothing blank if false

// 5. Array

$allFruits = array("Apple", "Banana", "Mango");
echo $allFruits[0];
echo PHP_EOL;

// To print all the elements of an array
print_r($allFruits);
echo PHP_EOL;

// 6. Object

$clCar = new stdClass();
$clCar->name = "Audi";  
$clCar->color = "Black";
echo $clCar->name;
echo PHP_EOL;

// 7. NULL

$myFuture = NULL;
echo $myFuture;


// Constants

define("PI", 3.14);
echo PI;

?>