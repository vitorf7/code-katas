<?php

namespace VitorF7\CodeKatas\StringCalculator1;

/**
 * Class StringCalculator
 *
 * @package VitorF7\CodeKatas\StringCalculator1
 */
class StringCalculator
{
    /**
     * Max Allowed Number
     *
     * @var int
     */
    const MAX_ALLOWED_NUMBER = 1000;

    /**
     * Add up the numbers passed in a string
     *
     * @param $numbers
     *
     * @return int
     */
    public function add($numbers)
    {
        $result = 0;

        $numbers = $this->parseNumbersString($numbers);

        foreach ($numbers as $number) {
            $this->guardAgainstNegativeNumbers($number);

            if ($number >= static::MAX_ALLOWED_NUMBER) {
                continue;
            }

            $result += $number;
        }

        return $result;
    }

    /**
     * Protect against negative numbers and throw exception
     *
     * @param $number
     */
    private function guardAgainstNegativeNumbers($number)
    {
        if ($number >= 0) {
            return;
        }

        throw new \InvalidArgumentException("Negative numbers are not allowed. You passed in: {$number}");
    }

    /**
     * Parse the numbers string and return an array of integers
     *
     * @param $numbers
     *
     * @return array
     */
    private function parseNumbersString($numbers)
    {
        return array_map('intval', preg_split("/[,\|\\n]/", $numbers));
    }
}