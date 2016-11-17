<?php

namespace VitorF7\CodeKatas\Tests\RomanNumerals1;

use VitorF7\CodeKatas\RomanNumerals1\RomanNumeral;

class RomanNumeralTest extends \PHPUnit_Framework_TestCase
{
    protected $romanNumeral;

    public function setUp()
    {
        $this->romanNumeral = new RomanNumeral();
    }
    /** @test */
    public function it_converts_I_for_1()
    {
        $result = $this->romanNumeral->convert(1);

        $this->assertEquals("I", $result);
    }

    /** @test */
    public function it_converts_II_for_2()
    {
        $result = $this->romanNumeral->convert(2);

        $this->assertEquals('II', $result);
    }

    /** @test */
    public function it_converts_III_for_3()
    {
        $result = $this->romanNumeral->convert(3);

        $this->assertEquals('III', $result);
    }

    /** @test */
    public function it_converts_IV_for_4()
    {
        $result = $this->romanNumeral->convert(4);

        $this->assertEquals('IV', $result);
    }

    /** @test */
    public function it_converts_V_for_5()
    {
        $result = $this->romanNumeral->convert(5);

        $this->assertEquals('V', $result);
    }

    /** @test */
    public function it_converts_VI_for_6()
    {
        $result = $this->romanNumeral->convert(6);

        $this->assertEquals('VI', $result);
    }

    /** @test */
    public function it_converts_VII_for_7()
    {
        $result = $this->romanNumeral->convert(7);

        $this->assertEquals('VII', $result);
    }

    /** @test */
    public function it_converts_IX_for_9()
    {
        $result = $this->romanNumeral->convert(9);

        $this->assertEquals('IX', $result);
    }

    /** @test */
    public function it_converts_X_for_10()
    {
        $result = $this->romanNumeral->convert(10);

        $this->assertEquals('X', $result);
    }

    /** @test */
    public function it_converts_XII_for_12()
    {
        $result = $this->romanNumeral->convert(12);

        $this->assertEquals('XII', $result);
    }

    /** @test */
    public function it_converts_XV_for_15()
    {
        $result = $this->romanNumeral->convert(15);

        $this->assertEquals('XV', $result);
    }

    /** @test */
    public function it_converts_XVIII_for_18()
    {
        $result = $this->romanNumeral->convert(18);

        $this->assertEquals('XVIII', $result);
    }

    /** @test */
    public function it_converts_XX_for_20()
    {
        $result = $this->romanNumeral->convert(20);

        $this->assertEquals('XX', $result);
    }

    /** @test */
    public function it_converts_L_for_50()
    {
        $result = $this->romanNumeral->convert(50);

        $this->assertEquals('L', $result);
    }

    /** @test */
    public function it_converts_C_for_100()
    {
        $result = $this->romanNumeral->convert(100);

        $this->assertEquals('C', $result);
    }

    /** @test */
    public function it_converts_D_for_500()
    {
        $result = $this->romanNumeral->convert(500);

        $this->assertEquals('D', $result);
    }

    /** @test */
    public function it_converts_M_for_1000()
    {
        $result = $this->romanNumeral->convert(1000);

        $this->assertEquals('M', $result);
    }

    /** @test */
    public function it_converts_CD_for_400()
    {
        $result = $this->romanNumeral->convert(400);

        $this->assertEquals('CD', $result);
    }

    /** @test */
    public function it_converts_CDXLIV_for_444()
    {
        $result = $this->romanNumeral->convert(444);

        $this->assertEquals('CDXLIV', $result);
    }
}
