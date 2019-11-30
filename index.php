<?php

require __DIR__ . '/vendor/autoload.php';

use Homework\NumberFormatter;
use Homework\MoneyFormatter;

$number = new NumberFormatter(4324.4355);

$formattedNumberEur = new MoneyFormatter();
$formattedNumberEur->formatEur($number);

$formattedNumberUsd = new MoneyFormatter();
$formattedNumberUsd->formatUsd($number);

echo $formattedNumberUsd . PHP_EOL . $formattedNumberEur . PHP_EOL;