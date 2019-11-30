<?php

namespace Homework;

class NumberFormatter
{
    protected $number;
    private $formattedNumber;

    /**
     * NumberFormatter constructor.
     * @param float $number
     */
    public function __construct(float $number)
    {
        $this->number = $number;
    }

    public function getNumber(): float
    {
        return $this->number;
    }

    public function formatNumber(): string
    {
        $number = $this->number;

        if ($number >= 999500) {
            $formattedNumber = number_format($number / 1000000,2,".",".");

            return $this->formattedNumber = $formattedNumber . 'M';
        } elseif ($number >= 99950) {
            $formattedNumber = number_format($number / 1000,0,".",".");

            return $this->formattedNumber = $formattedNumber . 'K';
        } elseif ($number >= 1000) {
            $formattedNumber = number_format($number,0," "," ");

            return $this->formattedNumber = $formattedNumber;
        } elseif ($number >= -1000) {
            $formattedNumber = number_format($number,2,".",".");

            return $this->formattedNumber = $formattedNumber;
        } elseif ($number >= -99950) {
            $formattedNumber = number_format($number,0," "," ");

            return $this->formattedNumber = $formattedNumber;
        } elseif ($number >= -999500) {
            $formattedNumber = number_format($number / 1000,0,".",".");

            return $this->formattedNumber = $formattedNumber . 'K';
        } else {
            $formattedNumber = number_format($number / 1000000,2,".",".");

            return $this->formattedNumber = $formattedNumber . 'M';
        }
    }

    public function __toString()
    {
        return $this->formattedNumber;
    }
}