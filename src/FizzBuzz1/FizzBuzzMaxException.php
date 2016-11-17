<?php

namespace VitorF7\CodeKatas\FizzBuzz1;


/**
 * Class FizzBuzzMaxException
 *
 * @package VitorF7\CodeKatas\FizzBuzz1
 */
class FizzBuzzMaxException extends \Exception
{
    /**
     * FizzBuzzMaxException constructor.
     *
     * @param null $message
     */
    public function __construct($message = null)
    {
        $message = ($message === null) ? "Number requested goes over Fizz Buzz maximum of 100" : $message;

        parent::__construct($message);
    }
}