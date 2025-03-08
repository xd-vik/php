<?php
// Strings in php

// 1. Single Quotes
$saMyName = 'Vivek';
echo $saMyName . PHP_EOL;

// 2. Double Quotes
$saMyName = "Vivek";
echo $saMyName . PHP_EOL;

// 3. Heredoc
// Heredoc is used to create strings that span multiple lines and preserve the newline characters.

$saMyName = <<<EOD
Vivek
EOD;
echo $saMyName . PHP_EOL;

// 4. Nowdoc
// Nowdoc is similar to Heredoc, but the difference is that it does not parse variables.
$saMyName = <<<'EOD'
Vivek
EOD;
echo $saMyName . PHP_EOL;

// String Functions

// 1. strlen()
// The strlen() function is used to get the length of a string.

$saMyName = "Vivek";
$inLength = strlen($saMyName);
echo $inLength . PHP_EOL;

// 2. str_word_count()
// The str_word_count() function is used to count the number of words in a string.

$saMyName = "Vivek";
$inWordCount = str_word_count($saMyName);
echo $inWordCount . PHP_EOL;

// 3. strrev()
// The strrev() function is used to reverse a string.

$saMyName = "Vivek";
$saReversedName = strrev($saMyName);
echo $saReversedName . PHP_EOL;

// 4. strpos()
// The strpos() function is used to find the position of the first occurrence of a substring in a string.

$saMyName = "Vivek";
$inPosition = strpos($saMyName, "k");
echo $inPosition . PHP_EOL;

// 5. str_replace()
// The str_replace() function is used to replace a substring with another substring in a string.

$saMyName = "Vivek";
$saNewName = str_replace("Vivek", "Heisenberg", $saMyName);
echo $saNewName . PHP_EOL;

// 6. strtolower()
// The strtolower() function is used to convert a string to lowercase.

$saMyName = "Vivek";
$saLowerCaseName = strtolower($saMyName);
echo $saLowerCaseName . PHP_EOL;

// 7. strtoupper()
// The strtoupper() function is used to convert a string to uppercase.

$saMyName = "Vivek";
$saUpperCaseName = strtoupper($saMyName);
echo $saUpperCaseName . PHP_EOL;

// 8. trim()
// The trim() function is used to remove whitespace or other predefined characters from both sides of a string.

$saMyName = " Vivek ";
$saTrimmedName = trim($saMyName);
echo $saTrimmedName . PHP_EOL;

// 9. ltrim
// The ltrim() function is used to remove whitespace or other predefined characters from the left side of a string.

$saMyName = " Vivek ";
$saLeftTrimmedName = ltrim($saMyName);
echo $saLeftTrimmedName . PHP_EOL;

// 10. rtrim
// The rtrim() function is used to remove whitespace or other predefined characters from the right side of a string.

$saMyName = " Vivek ";
$saRightTrimmedName = rtrim($saMyName);
echo $saRightTrimmedName . PHP_EOL;

// 11. explode()
// The explode() function is used to split a string into an array based on a delimiter.

$saMyName = "Vivek";
$saNameArray = explode("i", $saMyName);
print_r($saNameArray);
echo PHP_EOL;

// 12. implode()
// The implode() function is used to join array elements with a string.

$saNameArray = array("V", "vek");
$saMyName = implode("i", $saNameArray);
echo $saMyName . PHP_EOL;

// 13. substr()
// The substr() function is used to extract a part of a string.

$saMyName = "Vivek";
$saSubName = substr($saMyName, 1, 3);
echo $saSubName . PHP_EOL;

// 14. str_repeat()
// The str_repeat() function is used to repeat a string a specified number of times.

$saMyName = "Vivek";
$saRepeatedName = str_repeat($saMyName, 3);
echo $saRepeatedName . PHP_EOL;

// 15. str
// The str_pad() function is used to pad a string to a certain length with another string.

$saMyName = "Vivek";
$saReplacedName = str_replace("Vivek", "Heisenberg", $saMyName);
echo $saReplacedName . PHP_EOL;


// Interveiw Questions on strings

// 1. What are the different ways to define a string in PHP?

// There are four ways to define a string in PHP:
// Single Quotes: $saMyName = 'Vivek';
// Double Quotes: $saMyName = "Vivek";
// Heredoc: $saMyName = <<<EOD Vivek EOD;
// Nowdoc: $saMyName = <<<'EOD' Vivek EOD;

// 2. What is the difference between single quotes and double quotes in PHP?

// Single quotes are used to define simple strings where variables are not parsed, and escape sequences are not interpreted. Double quotes are used to define strings where variables are parsed and escape sequences are interpreted.

// 3. What is the purpose of the strlen() function in PHP?
// The strlen() function is used to get the length of a string in PHP.

// 4. How can you reverse a string in PHP?
// The strrev() function is used to reverse a string in PHP.



?>

