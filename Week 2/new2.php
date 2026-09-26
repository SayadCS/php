```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Examples</title>
</head>

<body>

<?php

// Tags PHP

// Constant syntax
define("Age", 12);
echo Age;

echo "<br><br>";


// Control structure examples
$Age = 20;

if ($Age >= 18) {
    echo "Adult";
} else {
    echo "Child";
}

echo "<br><br>";


// Grade example
$marks = 100;

if ($marks >= 90) {
    echo "A";
} elseif ($marks >= 80) {
    echo "B";
} elseif ($marks >= 70) {
    echo "C";
} elseif ($marks >= 60) {
    echo "D";
} else {
    echo "Fail";
}

echo "<br><br>";


// Fuel example
$fuel = 5;

if ($fuel <= 1) {
    echo "Low";
} else {
    echo "Full";
}

echo "<br><br>";


// While loop
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

echo "<br>";


// Do While loop
do {
    echo $count . "<br>";
    $count++;
} while ($count <= 10);

echo "<br>";


// For loop
// Multiplication table of 12
for ($count = 1; $count <= 12; $count++) {
    echo "$count times 12 is " . ($count * 12) . "<br>";
}

echo "<br>";


// For loop to print numbers from 1 to 15
for ($count = 1; $count <= 15; $count++) {
    echo $count . "<br>";
}

echo "<br>";


// For loop to print the square of numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
}

echo "<br>";


// Break statement
$i = 1;

while ($i <= 15) {
    echo "$i, ";
    $i++;

    if ($i == 10) {
        break;
    }
}

echo "<br><br>";


// Nested loop to print multiplication table
for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 5; $j++) {
        echo ($i * $j) . " ";
    }

    echo "<br>";
}

echo "<br>";


// ARRAYS

// First way to create an array
$numbers = array();

// Adding values to the array
$numbers[0] = 2;
$numbers[1] = "ALI";

// Display all the values using the pre tag
echo "<pre>";
print_r($numbers);
echo "</pre>";


// Using a for loop to display the array values
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "<br>";
}

echo "<br>";


// Associative array
// The double arrow operator (=>) connects the key and value

$info = array(
    "id" => "101",
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 160.5
);


// Displaying the information stored in the associative array
echo "<pre>";

echo "Information about the person:<br>";

print_r($info);

echo "</pre>";


// var_dump() displays detailed information about the array
echo "<pre>";
var_dump($info);
echo "</pre>";

?>

</body>
</html>
```
