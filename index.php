<?php

/**
 * This is the enter point of the Trip Sorter API
 */

require_once __DIR__ . '/src/TaxCalculator.php';

echo "Please enter your income: ";

fscanf(STDIN, "%d", $income);

$check = filter_var($income, FILTER_VALIDATE_INT);

if (false === $check || $income < 0) {
    echo sprintf("\n%d is not a correct income! \n", $income);
} else {
    $taxCalculator = new TaxCalculator();

    echo sprintf("\nYour annual income tax is : %d \n", $taxCalculator->calculateTax($income));
}
