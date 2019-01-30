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
     * If the same currency was provided this method SHOULD return a new instance with the same values
     *
     * @param CurrencyInterface $currency
     *
     * @return CurrencyValueInterface
     */
    public function convertTo(CurrencyInterface $currency): CurrencyValueInterface;
}
