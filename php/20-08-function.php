<?php

declare(strict_types=1); // strict requirement

// Return Type Declarations
function addNumbers(float $a, float $b): float
{
    return $a + $b;
}

echo addNumbers(1.2, 5.2);
