<?php

namespace VitorF7\CodeKatas\Tests\FizzBuzz1;


use VitorF7\CodeKatas\FizzBuzz1\FizzBuzz;
use VitorF7\CodeKatas\FizzBuzz1\FizzBuzzMaxException;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest
 *
 * @package VitorF7\CodeKatas\Tests
 */
class FizzBuzzTest extends TestCase
{
    /**
     * @var
     */
    protected $fizzBuzz;

    public function setUp():void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function it_will_output_array_till_1()
    {
        $result = $this->fizzBuzz->play(1);
        $expected = [1];

        $this->assertCount(1, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_fizz_for_3()
    {
        $result = $this->fizzBuzz->play(3);
        $expected = [1, 2, "Fizz"];

        $this->assertCount(3, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_buzz_for_5()
    {
        $result = $this->fizzBuzz->play(5);
        $expected = [1, 2, "Fizz", 4, "Buzz"];

        $this->assertCount(5, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_fizz_for_3_and_6()
    {
        $result = $this->fizzBuzz->play(6);
        $expected = [1, 2, "Fizz", 4, "Buzz", "Fizz"];

        $this->assertCount(6, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_fizz_for_3_and_6_and_9()
    {
        $result = $this->fizzBuzz->play(9);
        $expected = [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz"];

        $this->assertCount(9, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_buzz_for_5_and_10()
    {
        $result = $this->fizzBuzz->play(10);
        $expected = [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz"];

        $this->assertCount(10, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_fizzbuzz_for_15()
    {
        $result = $this->fizzBuzz->play(15);
        $expected = [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"];

        $this->assertCount(15, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_output_fizzbuzz_for_30()
    {
        $result = $this->fizzBuzz->play(30);
        $expected = [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz", 16, 17, "Fizz", 19, "Buzz", "Fizz", 22, 23, "Fizz", "Buzz", 26, "Fizz", 28, 29, "FizzBuzz"];

        $this->assertCount(30, $result);
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_will_be_able_to_output_till_100()
    {
        $result = $this->fizzBuzz->play(100);

        $this->assertCount(100, $result);
    }

    /** @test */
    public function it_will_throw_an_exception_if_more_than_100_is_requested()
    {
        $this->expectException(FizzBuzzMaxException::class);
        $this->expectExceptionMessage("Number requested goes over Fizz Buzz maximum of 100");

        $this->fizzBuzz->play(101);
    }
}
