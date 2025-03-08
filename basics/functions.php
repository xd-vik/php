<?php

// function in php

function sayMyName(){
    echo "Heisenberg";
}

sayMyName();

echo PHP_EOL;

// function with parameters

function add($inNumber1, $inNumber2){
    $inResult = $inNumber1 + $inNumber2;
    echo $inResult;
}  

add(10, 20);

echo PHP_EOL;

// function with return type

function multiply($inNumber1, $inNumber2){
    $inResult = $inNumber1 * $inNumber2;
    return $inResult;
}

$inResult = multiply(10, 20);

echo $inResult;

echo PHP_EOL;

// function with default parameters

function divide($inNumber1, $inNumber2 = 2){
    $inResult = $inNumber1 / $inNumber2;
    return $inResult;
}

$inResult = divide(10);
echo $inResult;
echo PHP_EOL;

$inResult = divide(10, 5);
echo $inResult;
echo PHP_EOL;

// function with variable number of arguments

function sum(...$inNumbers){
    $inResult = 0;
    foreach($inNumbers as $inNumber){
        $inResult += $inNumber;
    }
    return $inResult;
}

$inResult = sum(10, 20, 30, 40, 50);
echo $inResult;
echo PHP_EOL;

// function with reference parameters

function increment(&$inNumber){
    $inNumber++;
}

$inNumber = 10;
increment($inNumber);
echo $inNumber;
echo PHP_EOL;


// Another example of reference parameters

function swap(&$inNumber1, &$inNumber2){
    $inTemp = $inNumber1;
    $inNumber1 = $inNumber2;
    $inNumber2 = $inTemp;
}

$inNumber1 = 10;
$inNumber2 = 20;
swap($inNumber1, $inNumber2);
echo $inNumber1 . " " . $inNumber2;
echo PHP_EOL;



// Anonymous functions

$clAdd = function($inNumber1, $inNumber2){
    $inResult = $inNumber1 + $inNumber2;
    return $inResult;
};

$inResult = $clAdd(10, 20);
echo $inResult;
echo PHP_EOL;

// Recursive functions

function factorial($inNumber){
    if($inNumber == 0){
        return 1;
    }
    return $inNumber * factorial($inNumber - 1);
}

$inResult = factorial(5);
echo $inResult;
echo PHP_EOL;

// Arrow functions

$clMultiply = fn($inNumber1, $inNumber2) => $inNumber1 * $inNumber2;

$inResult = $clMultiply(10, 20);
echo $inResult;
echo PHP_EOL;

// Function overloading

function addNumbers($inNumber1, $inNumber2){
    $inResult = $inNumber1 + $inNumber2;
    return $inResult;
}
$inResult = addNumbers(10, 20);
echo $inResult;
echo PHP_EOL;

// Function overloading is not possible in PHP. We can't have two functions with the same name in PHP. However, we can have a function with the same name but with a different number of parameters. This is called function overloading.

// function addNumbers($inNumber1, $inNumber2, $inNumber3){
//     $inResult = $inNumber1 + $inNumber2 + $inNumber3;
//     return $inResult;
// }

// $inResult = addNumbers(10, 20, 30);
// echo $inResult;
// echo PHP_EOL;

// This will throw an error because we can't have two functions with the same name in PHP.

// Function overriding

class ParentClass{
    function sayHello(){
        echo "Hello from ParentClass";
    }
}

class ChildClass extends ParentClass{
    function sayHello(){
        echo "Hello from ChildClass";
    }
}

$clChildClass = new ChildClass();
$clChildClass->sayHello();

echo PHP_EOL;


// Function overriding is not possible in PHP. We can't have two functions with the same name in PHP. However, we can have a function with the same name but in a child class. This is called function overriding.





?>