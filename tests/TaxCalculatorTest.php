<?php

require_once __DIR__ . '/../src/TaxCalculator.php';

/**
 * Class TaxCalculatorTest
 */
class TaxCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TaxCalculator
     */
    private $taxCalculator;

    public function setUp()
    {
        $this->taxCalculator = new TaxCalculator();
    }

    /**
     * @test
     */
    public function calculateTax()
    {
        $tax = $this->taxCalculator->calculateTax(0);
        $this->assertEquals(0, $tax);

        $tax = $this->taxCalculator->calculateTax(50000000);
        $this->assertEquals(2500000, $tax);

        $tax = $this->taxCalculator->calculateTax(75000000);
        $this->assertEquals(6250000, $tax);

        $tax = $this->taxCalculator->calculateTax(750000000);
        $this->assertEquals(170000000, $tax);
    }
}
