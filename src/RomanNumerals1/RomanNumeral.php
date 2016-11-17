<?php

namespace VitorF7\CodeKatas\RomanNumerals1;

class RomanNumeral
{
    protected $lookup = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    ];

    public function convert($number)
    {
        $solution = '';

        foreach ($this->lookup as $limit => $glyph) {
            while ($number >= $limit) {
                $solution .= $glyph;
                $number -= $limit;
            }
        }

        return $solution;
    }
}