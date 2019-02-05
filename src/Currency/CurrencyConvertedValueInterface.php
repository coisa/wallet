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
