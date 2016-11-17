<?php

namespace VitorF7\CodeKatas\Tests\StringCalculator1;

use VitorF7\CodeKatas\StringCalculator1\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected $stringCalculator;

    public function setUp()
    {
        $this->stringCalculator = new StringCalculator();
    }

    /** @test */
    public function it_translates_an_empty_string_to_zero()
    {
        $result = $this->stringCalculator->add('');

        $this->assertEquals(0, $result);
    }

    /** @test */
    public function it_finds_the_sum_of_one_number()
    {
        $result = $this->stringCalculator->add('5');

        $this->assertEquals(5, $result);
    }

    /** @test */
    public function it_finds_the_sum_of_two_number()
    {
        $result = $this->stringCalculator->add('1,2');

        $this->assertEquals(3, $result);
    }

    /** @test */
    public function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $result = $this->stringCalculator->add('1,2,3,4,5');

        $this->assertEquals(15, $result);
    }

    /** @test */
    public function it_disallows_negative_numbers()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Negative numbers are not allowed. You passed in: -2");

        $this->stringCalculator->add('1,2,-2');
    }

    /** @test */
    public function it_skips_numbers_equal_to_or_more_than_1000()
    {
        $result = $this->stringCalculator->add('1,2,3,1000');

        $this->assertEquals(6, $result);
    }

    /** @test */
    public function it_finds_sum_of_string_of_numbers_separated_by_new_line_character()
    {
        $result = $this->stringCalculator->add("1\n2\n3");

        $this->assertEquals(6, $result);
    }

    /** @test */
    public function it_finds_sum_of_string_of_numbers_separated_by_pipe_character()
    {
        $result = $this->stringCalculator->add("1|2|3");

        $this->assertEquals(6, $result);
    }
}
