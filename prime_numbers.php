<?php

/**
 *
 * Дано натуральное число. Проверить, простое оно или нет. Если не простое, то найти все его делители
 *
 */

$number = rand(1, 100);
$dividers = [];

for ($i = 2; $i < $number; ++$i) {
    if ($number % $i == 0) {
        $dividers[] = $i;
    }
}

echo empty($dividers)
    ? "Число $number является простым"
    : 'Делители числа ' . $number . ': ' . implode(', ', $dividers);