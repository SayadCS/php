<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//1. Compare three integers -> print greatest and smallest

$a = 12;
$b = 45;
$c = 7;

$greatest = $a;
if ($b > $greatest) {
    $greatest = $b;
}
if ($c > $greatest) {
    $greatest = $c;
}

$smallest = $a;
if ($b < $smallest) {
    $smallest = $b;
}
if ($c < $smallest) {
    $smallest = $c;
}

echo "1) Numbers: $a, $b, $c\n";
echo "   Greatest: $greatest\n";
echo "   Smallest: $smallest\n\n";



//2. Check if a number is divisible by 3, 5, both, or none

$num = 15;

$divBy3 = ($num % 3 == 0);
$divBy5 = ($num % 5 == 0);

if ($divBy3 && $divBy5) {
    echo "2) $num is divisible by both 3 and 5\n\n";
} elseif ($divBy3) {
    echo "2) $num is divisible by 3 only\n\n";
} elseif ($divBy5) {
    echo "2) $num is divisible by 5 only\n\n";
} else {
    echo "2) $num is not divisible by 3 or 5\n\n";
}


//3a. Print odd numbers from 0 to 20

echo "3a) Odd numbers from 0 to 20:\n";
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "\n\n";

//3b. Print even numbers from 35 down to 7

echo "3b) Even numbers from 35 to 7:\n";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "\n\n";



//4. Numbers divisible by both 2 and 5, from 50 down to 2

echo "4) Numbers divisible by 2 AND 5, from 50 to 2:\n";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
echo "\n\n";



//5. Reverse a given number (e.g. 12345 -> 54321)

$number = 12345;
$original = $number;
$reversed = 0;

while ($number > 0) {
    $lastDigit = $number % 10;      // grab the last digit
    $reversed = ($reversed * 10) + $lastDigit; // shift left, add digit
    $number = (int)($number / 10);  // drop the last digit
}

echo "5) Reverse of $original is $reversed\n";

?>

</body>
</html>