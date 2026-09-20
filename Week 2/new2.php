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


// Grade / Switch example
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


// Loop control structure - While loop
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

echo "<br>";


// LOOPS - 1. Do While loop
do {
    echo $count . "<br>";
    $count++;
} while ($count <= 10);

echo "<br>";


// LOOPS - 2. For loop
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
// Exit from the loop when a certain condition is met
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
for ($i = 1; $i <= 3; $i++) { // Row loop

    for ($j = 1; $j <= 5; $j++) { // Column loop

        echo ($i * $j) . " ";

    }

    echo "<br>";
}

?>

</body>
</html>