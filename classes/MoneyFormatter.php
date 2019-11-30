<?php

namespace Homework;

class MoneyFormatter
{
    private $formattedMoney;

    /**
     * @param NumberFormatter $number
     */
    public function formatEur($number)
    {
        $formattedMoney = $number->formatNumber() . ' €';
        $this->formattedMoney = $formattedMoney;
    }

    /**
     * @param NumberFormatter $number
     */
    public function formatUsd($number)
    {
        $formattedMoney = $number->formatNumber() . ' $';
        $this->formattedMoney = $formattedMoney;
    }

    public function __toString()
    {
        return $this->formattedMoney;
    }
}