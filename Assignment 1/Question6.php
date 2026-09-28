<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 8;
$num2 = 12;

if ($num1 > $num2) {
    $Lcm = $num1;
}
else {
    $Lcm = $num2;
}

while (true) {
    if ($Lcm % $num1 == 0 && $Lcm % $num2 == 0) {
        break;
    }

    $Lcm++;
}

echo "LCM = " . $Lcm;

?>
</body>
</html>