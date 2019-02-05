<?php declare(strict_types=1);
/*
 * This file is part of coisa/wallet.
 *
 * (c) Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

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
