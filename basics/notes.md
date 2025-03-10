# PHP Notes

## Introduction to PHP

PHP (Hypertext Preprocessor) is a popular server-side scripting language designed for web development. It is embedded within HTML and executed on the server.

### Key Features of PHP:

- Open-source and widely used
- Easy to integrate with HTML
- Supports multiple databases (MySQL, PostgreSQL, etc.)
- Cross-platform compatibility
- Supports Object-Oriented Programming (OOP)

## Basic Syntax

### Hello World in PHP

```php
<?php
    echo "Hello, World!";
?>
```

- `<?php ... ?>` → PHP code is enclosed within these tags.
- `echo` → Outputs text to the browser.
- Statements end with `;`.

### Comments in PHP

```php
// Single-line comment
# Another single-line comment
/*
   Multi-line comment
*/
```

## Variables and Data Types

### Declaring Variables

```php
<?php
    $name = "John";
    $age = 25;
?>
```

- Variables start with `$`.
- No need to declare type (PHP is loosely typed).

### Data Types

1. **String**: `$str = "Hello";`
2. **Integer**: `$num = 100;`
3. **Float**: `$price = 10.5;`
4. **Boolean**: `$isTrue = true;`
5. **Array**: `$arr = array("Apple", "Banana");`
6. **Object**: `$obj = new ClassName();`
7. **NULL**: `$var = NULL;`

## Operators

### Arithmetic Operators

```php
<?php
    $x = 10;
    $y = 5;
    echo $x + $y; // Addition
    echo $x - $y; // Subtraction
    echo $x * $y; // Multiplication
    echo $x / $y; // Division
    echo $x % $y; // Modulus
?>
```

### Comparison Operators

```php
<?php
    $a = 10;
    $b = 20;
    var_dump($a == $b); // Equal
    var_dump($a != $b); // Not equal
    var_dump($a > $b);  // Greater than
    var_dump($a < $b);  // Less than
?>
```

### Logical Operators

```php
<?php
    $x = true;
    $y = false;
    var_dump($x && $y); // AND
    var_dump($x || $y); // OR
    var_dump(!$x);      // NOT
?>
```

## Control Structures

### If-Else Statement

```php
<?php
    $num = 10;
    if ($num > 0) {
        echo "Positive Number";
    } else {
        echo "Negative Number";
    }
?>
```

### Switch Statement

```php
<?php
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the week";
            break;
        case "Friday":
            echo "Weekend is near";
            break;
        default:
            echo "Normal day";
    }
?>
```

## Loops

### For Loop

```php
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i <br>";
    }
?>
```

### While Loop

```php
<?php
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i <br>";
        $i++;
    }
?>
```

### Do-While Loop

```php
<?php
    $i = 1;
    do {
        echo "Number: $i <br>";
        $i++;
    } while ($i <= 5);
?>
```

## Functions

### Defining a Function

```php
<?php
    function greet($name) {
        return "Hello, $name!";
    }
    echo greet("John");
?>
```

- `function` keyword is used to declare functions.
- Functions can accept parameters and return values.

## Arrays

### Indexed Array

```php
<?php
    $fruits = array("Apple", "Banana", "Mango");
    echo $fruits[0]; // Outputs Apple
?>
```

### Associative Array

```php
<?php
    $ages = array("John" => 25, "Jane" => 30);
    echo $ages["John"]; // Outputs 25
?>
```

### Multidimensional Array

```php
<?php
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6)
    );
    echo $matrix[0][1]; // Outputs 2
?>
```

## Superglobals

### Common Superglobals in PHP

1. `$_GET` → Retrieve data from URL
2. `$_POST` → Retrieve data from form submission
3. `$_REQUEST` → Collect data from GET & POST
4. `$_SESSION` → Store session variables
5. `$_COOKIE` → Store cookies
6. `$_SERVER` → Server-related information

### Example: Using `$_GET`

```php
<?php
    echo "Hello, " . $_GET["name"];
?>
```

Access via: `file.php?name=John`

## File Handling

### Writing to a File

```php
<?php
    $file = fopen("test.txt", "w");
    fwrite($file, "Hello, PHP!");
    fclose($file);
?>
```

### Reading a File

```php
<?php
    $file = fopen("test.txt", "r");
    echo fread($file, filesize("test.txt"));
    fclose($file);
?>
```

## Database Connection (MySQL)

### Connecting to MySQL

```php
<?php
    $conn = new mysqli("localhost", "root", "", "test_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
```

---

This is a structured and well-organized PHP guide, covering fundamental to advanced concepts. 🚀
