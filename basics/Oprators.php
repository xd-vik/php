<?php

// Unary Operators
// 1. Increment (++)    

$inNumber = 10;
$inNumber++;
echo $inNumber . PHP_EOL;

// 2. Decrement (--)

$inNumber = 10;
$inNumber--;
echo $inNumber . PHP_EOL;

// 3. Logical Not (!)

$inAge = 21;
$saMessage = ($inAge >= 18) ? "You are eligible to vote" : "You are not eligible to vote";
echo $saMessage . PHP_EOL;

// 4. Bitwise Not (~)

$inNumber = 2;
$inResult = ~$inNumber;
echo $inResult . PHP_EOL;

// 5. Unary Plus (+)

$inNumber = 10;
$inResult = +$inNumber;
echo $inResult . PHP_EOL;

// 6. Unary Minus (-)

$inNumber = 10;
$inResult = -$inNumber;
echo $inResult . PHP_EOL;


// Binary Operators

// 1. Arithmetic Operators

$inNumber1 = 10;
$inNumber2 = 20;

// Addition (+)
$inResult = $inNumber1 + $inNumber2;
echo $inResult . PHP_EOL;

// Subtraction (-)
$inResult = $inNumber1 - $inNumber2;
echo $inResult . PHP_EOL;

// agaira wagaira 

// 2. Assignment Operators

$inNumber1 = 10;
$inNumber2 = 20;

// Addition Assignment (+=)
$inNumber1 += $inNumber2;
echo $inNumber1 . PHP_EOL;

// Subtraction Assignment (-=)

$inNumber1 = 10;
$inNumber2 = 20;

$inNumber1 -= $inNumber2;
echo $inNumber1 . PHP_EOL;

// 3. Comparison Operators

$inNumber1 = 10;
$inNumber2 = 20;

// Equal (==)
$inResult = ($inNumber1 == $inNumber2);
echo $inResult . PHP_EOL;

// Not Equal (!=)
$inResult = ($inNumber1 != $inNumber2);
echo $inResult . PHP_EOL;

// Identical (===)
$inResult = ($inNumber1 === $inNumber2);
echo $inResult . PHP_EOL;

// Not Identical (!==)
$inResult = ($inNumber1 !== $inNumber2);
echo $inResult . PHP_EOL;

// Greater Than (>)
$inResult = ($inNumber1 > $inNumber2);
echo $inResult . PHP_EOL;

// Less Than (<)
$inResult = ($inNumber1 < $inNumber2);
echo $inResult . PHP_EOL;


// 4. Logical Operators

$inNumber1 = 10;
$inNumber2 = 20;

// Logical AND (&&)

$inResult = ($inNumber1 > 0 && $inNumber2 > 0);
echo $inResult . PHP_EOL;

// Logical OR (||)

$inResult = ($inNumber1 > 0 || $inNumber2 > 0);
echo $inResult . PHP_EOL;

// Logical XOR

$inResult = ($inNumber1 > 0 XOR $inNumber2 > 0);
echo $inResult . PHP_EOL;


// 5. String Operators

$saString1
    = "Hello";
$saString2
    = "World";  

// Concatenation (.)
$saResult = $saString1 . $saString2;
echo $saResult . PHP_EOL;

// Concatenation Assignment (.=)
$saString1 .= $saString2;
echo $saString1 . PHP_EOL;


// 6. Array Operators

$allFruits1 = array("Apple", "Banana", "Mango");
$allFruits2 = array("Grapes", "Orange", "Pineapple");

// Union (+)
$allFruits = $allFruits1 + $allFruits2;
print_r($allFruits);
echo PHP_EOL;

// Equality (==)
$inResult = ($allFruits1 == $allFruits2);
echo $inResult . PHP_EOL;

// Identity (===)
$inResult = ($allFruits1 === $allFruits2);
echo $inResult . PHP_EOL;

// Inequality (!=)
$inResult = ($allFruits1 != $allFruits2);
echo $inResult . PHP_EOL;


// 7. Conditional (Ternary) Operator

$inAge = 21;
$saMessage = ($inAge >= 18) ? "You are eligible to vote" : "You are not eligible to vote";
echo $saMessage . PHP_EOL;


// 8. Null Coalescing Operator

$saName = "Vivek";
$saResult = $saName ?? "Name not found";
echo $saResult . PHP_EOL;


// 9. Spaceship Operator

$inNumber1 = 10;
$inNumber2 = 20;

$inResult = $inNumber1 <=> $inNumber2;
echo $inResult . PHP_EOL;

// 10. Error Control Operator

$saName = "Vivek";
$saResult = @$saName;
echo $saResult . PHP_EOL;


// Ternary Operator
// Syntax: (condition) ? (expression1) : (expression2)
// If the condition is true, expression1 is executed, otherwise expression2 is executed.

$inAge = 21;
$saMessage = ($inAge >= 18) ? "You are eligible to vote" : "You are not eligible to vote";
echo $saMessage;
?>

