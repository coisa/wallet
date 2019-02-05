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
