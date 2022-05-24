<?php

namespace App\Service;

use Exception;

class NumbersService
{
    /**
     * @param float $firstValue 
     * @param float $secondValue 
     * @return float 
     */
    public function addNumbers(float $firstValue, float $secondValue): float
    {
        return $firstValue + $secondValue;
    }

    /**
     * @param float $firstValue 
     * @param float $secondValue 
     * @return float 
     */
    public function divideNumbers(float $firstValue, float $secondValue): float
    {
        if ($secondValue == 0) {
            throw new Exception("cannot divide by zero");
        }

        return $firstValue / $secondValue;
    }
}
