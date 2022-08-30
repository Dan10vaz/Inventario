<?php

/**
 * @param $money
 * @return string
 */
function moneyFormat($money): string
{
    return '$' . number_format($money, 2, '.', ',');
}
