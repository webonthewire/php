<?php

declare(strict_types=1);

$var1 = [1, 2, 3];

if (is_array($var1)) {
    foreach($var1 as $i) {
        echo ' - ' . $i . PHP_EOL;
    }
} else {
    echo 'Змінна $var1 повинна бути масивом' . PHP_EOL;
}

