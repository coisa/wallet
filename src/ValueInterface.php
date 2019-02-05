<?php declare(strict_types=1);
/*
 * This file is part of coisa/wallet.
 *
 * (c) Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CoiSA\Wallet;

/**
 * Interface CurrencyValueInterface
 *
 * @package CoiSA\Wallet
 */
interface ValueInterface
{
    /**
     * The gross total value of this transaction with no fees or voucher applied
     *
     * @return float
     */
    public function getGrossValue(): float;

    /**
     * The fee applied to this transaction if it has some
     *
     * If no fees are applied this method SHOULD return zero as float
     * If more than one fee are applied this method SHOULD return the sum of all them
     *
     * @return float
     */
    public function getFeeValue(): float;

    /**
     * The voucher value applied to this transaction if it has some
     *
     * If no voucher are applied this method SHOULD return zero as float
     * If more than one voucher are applied this method SHOULD return the sum of all them
     *
     * @return float
     */
    public function getVoucherValue(): float;

    /**
     * The value with fees or voucher applied
     *
     * @return float
     */
    public function getNetValue(): float;
}
