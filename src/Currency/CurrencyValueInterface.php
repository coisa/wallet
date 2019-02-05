<?php

namespace CoiSA\Wallet\Currency;

use CoiSA\Wallet\ValueInterface;

/**
 * Interface CurrencyValueInterface
 *
 * @package CoiSA\Wallet\Currency
 */
interface CurrencyValueInterface extends ValueInterface
{
    /**
     * The currency of the value, so you can convert things as you wish
     *
     * @return CurrencyInterface
     */
    public function getCurrency(): CurrencyInterface;

    /**
     * Convert value to another currency
     *
     * @param CurrencyInterface $currency
     *
     * @return CurrencyConvertedValueInterface
     */
    public function convertTo(CurrencyInterface $currency): CurrencyConvertedValueInterface;
}
