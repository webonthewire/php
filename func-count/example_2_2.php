<?php

declare(strict_types=1);

$arr = [
    'a' => [1,2,3],
    'b' => [4,5,6],
];

var_dump(count($arr, COUNT_RECURSIVE));