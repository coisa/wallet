<?php

namespace CoiSA\Wallet\Currency;

/**
 * Interface CurrencyInterface
 *
 * @package CoiSA\Wallet\Currency
 */
interface CurrencyInterface
{
    /**
     * Currency symbol
     *
     * @return string
     */
    public function getSymbol(): string;

    /**
     * The currency name identifier
     *
     * @return string
     */
    public function getName(): string;
}
