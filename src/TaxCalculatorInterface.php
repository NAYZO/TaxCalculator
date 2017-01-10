<?php

/**
 * Interface TaxCalculatorInterface
 */
interface TaxCalculatorInterface
{
    const VERY_HIGH_INCOME = 500000000;
    const HIGH_INCOME = 250000000;
    const MEDIUM_INCOME = 50000000;

    const VERY_HIGH_RATE = 30;
    const HIGH_RATE = 25;
    const MEDIUM_RATE = 15;
    const LOW_RATE = 5;

    /**
     * @param float $income
     * @param float $tax
     * @return float
     */
    public function calculateTax($income, $tax);
}
