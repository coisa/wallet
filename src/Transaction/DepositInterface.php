<?php

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
