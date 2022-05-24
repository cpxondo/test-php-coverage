<?php

namespace App\Service;

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
}
