<?php
$numbers = [1, 2, 3, 4, 5];

// Fungsi biasa
$result1 = array_map(function($n) {
    return $n * 2;
}, $numbers);

// Arrow function
$result2 = array_map(fn($n) => $n * 2, $numbers);

print_r($result1);
print_r($result2);