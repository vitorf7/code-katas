<?php

namespace VitorF7\CodeKatas\Tests\PrimeFactors1;

use VitorF7\CodeKatas\PrimeFactors1\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    protected $primeFactors;

    public function setUp():void
    {
        $this->primeFactors = new PrimeFactors();
    }

    /** @test */
    public function it_returns_an_empty_array_for_1()
    {
        $result = $this->primeFactors->generate(1);

        $this->assertEquals([], $result);
    }


    /** @test */
    public function it_returns_2_for_2()
    {
        $result = $this->primeFactors->generate(2);

        $this->assertEquals([2], $result);
    }

    /** @test */
    public function it_returns_3_for_3()
    {
        $result = $this->primeFactors->generate(3);

        $this->assertEquals([3], $result);
    }

    /** @test */
    public function it_returns_2_2_for_4()
    {
        $result = $this->primeFactors->generate(4);

        $this->assertEquals([2, 2], $result);
    }

    /** @test */
    public function it_returns_5_for_5()
    {
        $result = $this->primeFactors->generate(5);

        $this->assertEquals([5], $result);
    }

    /** @test */
    public function it_returns_2_3_for_6()
    {
        $result = $this->primeFactors->generate(6);

        $this->assertEquals([2, 3], $result);
    }

    /** @test */
    public function it_returns_2_2_2_for_8()
    {
        $result = $this->primeFactors->generate(8);

        $this->assertEquals([2, 2, 2], $result);
    }

    /** @test */
    public function it_returns_3_3_for_9()
    {
        $result = $this->primeFactors->generate(9);

        $this->assertEquals([3, 3], $result);
    }

    /** @test */
    public function it_returns_2_5_for_10()
    {
        $result = $this->primeFactors->generate(10);

        $this->assertEquals([2, 5], $result);
    }

    /** @test */
    public function it_returns_2_2_3_for_12()
    {
        $result = $this->primeFactors->generate(12);

        $this->assertEquals([2, 2, 3], $result);
    }

    /** @test */
    public function it_returns_2_5_5_for_50()
    {
        $result = $this->primeFactors->generate(50);

        $this->assertEquals([2, 5, 5], $result);
    }

    /** @test */
    public function it_returns_2_2_5_5_for_100()
    {
        $result = $this->primeFactors->generate(100);

        $this->assertEquals([2, 2, 5, 5], $result);
    }
}
