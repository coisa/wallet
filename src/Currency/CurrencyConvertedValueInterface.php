<?php

namespace CoiSA\Wallet\Currency;

/**
 * Interface CurrencyValueInterface
 *
 * @package CoiSA\Wallet\Currency
 */
interface CurrencyConvertedValueInterface extends CurrencyValueInterface
{
    /**
     * @return CurrencyValueInterface
     */
    public function getOriginalValue(): CurrencyValueInterface;

    /**
     * @return float
     */
    public function getConversionRate(): float;
}
