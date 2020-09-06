<?php


class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return 'can not divide by zero';
    }
    function divide($numerater, $denominator){
        if ($denominator === 0){
            throw new DivideByZeroException();
        }
        return $numerater / $denominator;
    }
}