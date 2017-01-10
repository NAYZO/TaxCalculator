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
        // income 0
        $tax = $this->taxCalculator->calculateTax(0);
        $this->assertEquals(0, $tax);

        // income 50,000,000
        $tax = $this->taxCalculator->calculateTax(50000000);
        $this->assertEquals(2500000, $tax);

        // income 75,000,000
        $tax = $this->taxCalculator->calculateTax(75000000);
        $this->assertEquals(6250000, $tax);

        // income 250,000,000
        $tax = $this->taxCalculator->calculateTax(250000000);
        $this->assertEquals(32500000, $tax);

        // income 750,000,000
        $tax = $this->taxCalculator->calculateTax(750000000);
        $this->assertEquals(170000000, $tax);
    }
}
