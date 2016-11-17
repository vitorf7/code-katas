<?php

namespace VitorF7\CodeKatas\FizzBuzz1;


/**
 * Class FizzBuzz
 *
 * @package VitorF7\CodeKatas\FizzBuzz1
 */
class FizzBuzz
{
    /**
     * @var array
     */
    private $result = [];


    /**
     * @param $number
     *
     * @return array
     * @throws FizzBuzzMaxException
     */
    public function play($number)
    {
        if ($number > 100) {
            throw new FizzBuzzMaxException;
        }

        foreach (range(1, $number) as $num) {
            $this->addNumberToResult($num);
        }

        return $this->result;
    }

    /**
     * @param $number
     *
     * @return string
     */
    private function addNumberToResult($number)
    {
        if ($this->isFizz($number) && $this->isBuzz($number)) {
            return $this->result[] = "FizzBuzz";
        }

        if ($this->isBuzz($number)) {
            return $this->result[] = "Buzz";
        }

        if ($this->isFizz($number)) {
            return $this->result[] = "Fizz";
        }

        return $this->result[] = $number;
    }

    /**
     * @param $number
     *
     * @return bool
     */
    private function isBuzz($number)
    {
        return $number % 5 == 0;
    }

    /**
     * @param $number
     *
     * @return bool
     */
    private function isFizz($number)
    {
        return $number % 3 == 0;
    }
}