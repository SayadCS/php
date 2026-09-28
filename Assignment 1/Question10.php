<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "Prime numbers from 10 to 50:<br>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    if ($num <= 1) {
        $isPrime = false;
    }
    else {

        for ($i = 2; $i < $num; $i++) {

            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }

        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}

?>
</body>
</html>