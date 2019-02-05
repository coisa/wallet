<?php declare(strict_types=1);
/*
 * This file is part of coisa/wallet.
 *
 * (c) Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CoiSA\Wallet\Transaction;

use CoiSA\Wallet\WalletInterface;

/**
 * Interface DepositInterface
 *
 * @package CoiSA\Wallet\Transaction
 */
interface DepositInterface extends TransactionInterface
{
    /**
     * The destination wallet of the transaction
     *
     * @return WalletInterface
     */
    public function getTargetWallet(): WalletInterface;
}
