<?php

require_once __DIR__ . '/TaxCalculatorInterface.php';

/**
 * Class TaxCalculator
 */
class TaxCalculator implements TaxCalculatorInterface
{
    /**
     * This Method calculate the tax income (it's a recursive function)
     *
     * @param float $income
     * @param float $tax
     * @return float
     */
    public function calculateTax($income, $tax = 0)
    {
        if ($income > self::VERY_HIGH_INCOME) {
            $tax += $this->calculatePercentage($income - self::VERY_HIGH_INCOME, self::VERY_HIGH_RATE);

            return $this->calculateTax(self::VERY_HIGH_INCOME, $tax);
        } elseif ($income > self::HIGH_INCOME) {
            $tax += $this->calculatePercentage($income - self::HIGH_INCOME, self::HIGH_RATE);

            return $this->calculateTax(self::HIGH_INCOME, $tax);
        } elseif ($income > self::MEDIUM_INCOME) {
            $tax += $this->calculatePercentage($income - self::MEDIUM_INCOME, self::MEDIUM_RATE);

            return $this->calculateTax(self::MEDIUM_INCOME, $tax);
        } else {
            $tax += $this->calculatePercentage($income, self::LOW_RATE);

            return $tax;
        }
    }

    /**
     * @param float $number
     * @param int $percentage
     * @return float
     */
    private function calculatePercentage($number, $percentage)
    {
        return ($percentage / 100) * $number;
    }
}
