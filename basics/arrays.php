<?php

// Arrays in php

// 1. Indexed Arrays

$saFruits = array("Apple", "Banana", "Orange");
echo $saFruits[0] . PHP_EOL;

// To print all the elements of an array
print_r($saFruits);
echo PHP_EOL;

// 2. Associative Arrays

// variable = array("key" => value); and go on and on and on ....

$saFruitPrices = array("Apple" => 100, "Banana" => 50, "Orange" => 80);
echo $saFruitPrices["Apple"] . PHP_EOL;

// To print all the elements of an array

print_r($saFruitPrices);
echo PHP_EOL;

// print without using print_r

foreach($saFruitPrices as $saFruit => $inPrice){
    echo $saFruit . " : " . $inPrice . PHP_EOL;
}

// print without key value pair

foreach($saFruits as $i){
    echo $i . PHP_EOL;
}


// 3. Multidimensional Arrays

$saFruits = array(
    array("Apple", 100),
    array("Banana", 50),
    array("Orange", 80)
);

echo $saFruits[0][0] . PHP_EOL;

// To print all the elements of an array

print_r($saFruits);
echo PHP_EOL;

// 4. Array Functions

// 1. count()

$saFruits = array("Apple", "Banana", "Orange");
$inCount = count($saFruits);
echo $inCount . PHP_EOL;

// 2. array_push()

$saFruits = array("Apple", "Banana", "Orange");
array_push($saFruits, "Mango");
print_r($saFruits);
echo PHP_EOL;

// 3. array_pop()

$saFruits = array("Apple", "Banana", "Orange");
$saFruit = array_pop($saFruits);
echo $saFruit . PHP_EOL;

// 4. array_shift()

$saFruits = array("Apple", "Banana", "Orange");
$saFruit = array_shift($saFruits);
echo $saFruit . PHP_EOL;

// 5. array_unshift()

$saFruits = array("Apple", "Banana", "Orange");
array_unshift($saFruits, "Mango");
print_r($saFruits);
echo PHP_EOL;

// 6. array_slice()

$saFruits = array("Apple", "Banana", "Orange", "Mango");
$saNewFruits = array_slice($saFruits, 1, 2);
print_r($saNewFruits);

// 7. array_splice()

$saFruits = array("Apple", "Banana", "Orange", "Mango");
array_splice($saFruits, 1, 2);
print_r($saFruits);

// 8. array_merge()

$saFruits1 = array("Apple", "Banana", "Orange");
$saFruits2 = array("Grapes", "Mango", "Pineapple");
$saAllFruits = array_merge($saFruits1, $saFruits2);
print_r($saAllFruits);

// 9. array_search()

$saFruits = array("Apple", "Banana", "Orange");
$inPosition = array_search("Banana", $saFruits);
echo $inPosition . PHP_EOL;

// 10. array_key_exists()

$saFruitPrices = array("Apple" => 100, "Banana" => 50, "Orange" => 80);
$isExists = array_key_exists("Banana", $saFruitPrices);
echo $isExists . PHP_EOL;

// 11. in_array()

$saFruits = array("Apple", "Banana", "Orange");
$isExists = in_array("Banana", $saFruits);
echo $isExists . PHP_EOL;

// 12. array_reverse()

$saFruits = array("Apple", "Banana", "Orange");
$saReversedFruits = array_reverse($saFruits);
print_r($saReversedFruits);

// 13. array_unique()

$saFruits = array("Apple", "Banana", "Orange", "Apple", "Banana");
$saUniqueFruits = array_unique($saFruits);
print_r($saUniqueFruits);

?>