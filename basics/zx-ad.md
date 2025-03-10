# Advanced PHP Concepts

## PHP Superglobals

Superglobals are built-in variables that are always available in all scopes.

### `$_GET` and `$_POST`

Used to collect form data.

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "Hello, $name!";
    }
?>
<form method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
```

### `$_SESSION` (Session Management)

Used to store user data across multiple pages.

```php
<?php
    session_start();
    $_SESSION["username"] = "JohnDoe";
    echo "Session Set: " . $_SESSION["username"];
?>
```

### `$_COOKIE` (Cookies Handling)

Used to store user data in the browser.

```php
<?php
    setcookie("user", "JohnDoe", time() + (86400 * 30), "/");
    echo $_COOKIE["user"];
?>
```

## DOM Manipulation in PHP

PHP can modify HTML content dynamically.

### Generating Dynamic HTML with PHP

```php
<?php
    echo "<ul>";
    $items = ["Home", "About", "Contact"];
    foreach ($items as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
?>
```

## Built-in PHP Functions

### String Functions

```php
<?php
    $str = " Hello PHP! ";
    echo strlen($str);        // String length
    echo strtolower($str);    // Convert to lowercase
    echo strtoupper($str);    // Convert to uppercase
    echo trim($str);          // Remove whitespace
?>
```

### Array Functions

```php
<?php
    $arr = [1, 2, 3, 4, 5];
    echo count($arr);           // Count elements
    print_r(array_reverse($arr)); // Reverse array
?>
```

### Date & Time Functions

```php
<?php
    echo date("Y-m-d H:i:s"); // Current date and time
    echo time();               // Unix timestamp
?>
```

### File Handling Functions

```php
<?php
    file_put_contents("test.txt", "Hello, PHP!");
    echo file_get_contents("test.txt");
?>
```

## Advanced Function Concepts

### Variable Function Calls

```php
<?php
    function greet() {
        return "Hello, World!";
    }
    $func = "greet";
    echo $func();
?>
```

### Anonymous Functions (Closures)

```php
<?php
    $sayHello = function($name) {
        return "Hello, $name!";
    };
    echo $sayHello("John");
?>
```

### Recursive Functions

```php
<?php
    function factorial($n) {
        if ($n == 0) return 1;
        return $n * factorial($n - 1);
    }
    echo factorial(5); // Output: 120
?>
```
