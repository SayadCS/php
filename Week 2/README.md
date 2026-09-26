# Week 2 - PHP Basics, Control Structures and Arrays

This week focuses on the fundamentals of PHP programming, including constants, conditional statements, loops, break statements, nested loops, and arrays.

## Topics Covered

### 1. PHP Constants

The code demonstrates how to create and use a constant using the `define()` function.

```php
define("Age", 12);
echo Age;
```

### 2. If / Else Statements

`if` and `else` statements are used to make decisions based on conditions.

The example checks a person's age and displays:

* **Adult** if the age is 18 or above
* **Child** if the age is below 18

### 3. Grade System

An `if`, `elseif`, and `else` structure is used to create a grading system.

* **90–100:** A
* **80–89:** B
* **70–79:** C
* **60–69:** D
* **Below 60:** Fail

### 4. Fuel Condition

A conditional statement checks the amount of fuel.

If the fuel is less than or equal to 1, the program displays **"Low"**. Otherwise, it displays **"Full"**.

### 5. While Loop

A `while` loop repeatedly executes a block of code while a condition is true.

The example displays numbers from 1 to 5.

### 6. Do While Loop

A `do while` loop executes the code first and checks the condition afterwards.

This means the code inside the loop will execute at least once.

### 7. For Loops

Several `for` loops are used for different tasks:

* Displaying the multiplication table of 12
* Printing numbers from 1 to 15
* Calculating the square of numbers from 1 to 10

### 8. Break Statement

The `break` statement is used to stop a loop when a specific condition is reached.

In the example, the loop stops when the value reaches 10.

### 9. Nested Loops

A nested loop is a loop inside another loop.

The example uses two `for` loops to create a multiplication table using rows and columns.

### 10. Arrays

Arrays are used to store multiple values inside a single variable.

An indexed array is created using:

```php
$numbers = array();
```

Values can then be added using an index:

```php
$numbers[0] = 2;
$numbers[1] = "ALI";
```

### 11. `print_r()`

The `print_r()` function is used to display the contents of an array in a readable format.

The `<pre>` HTML tag is used to make the output easier to read.

### 12. `count()` and Arrays

The `count()` function is used to find the number of elements inside an array.

A `for` loop can then be used to go through each value in the array.

### 13. Associative Arrays

An associative array stores information using **keys and values** instead of only numerical indexes.

The `=>` operator connects a key to its value.

Example:

```php
$info = array(
    "id" => "101",
    "name" => "Mohamed Abdi Ali",
    "age" => 20
);
```

### 14. `var_dump()`

The `var_dump()` function displays detailed information about a variable or array, including its data type and value.

Example:

```php
var_dump($info);
```

## Summary

Week 2 covers important PHP fundamentals including **constants, conditional statements, grading systems, while loops, do while loops, for loops, break statements, nested loops, indexed arrays, associative arrays, `print_r()`, `count()`, and `var_dump()`**.

These concepts provide the foundation for writing PHP programs that can make decisions, repeat tasks, and store and manage multiple pieces of data.

```
```
