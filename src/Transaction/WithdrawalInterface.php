<?php

namespace CoiSA\Wallet\Transaction;

use CoiSA\Wallet\WalletInterface;

/**
 * Interface WithdrawalInterface
 *
 * @package CoiSA\Wallet\Transaction
 */
interface WithdrawalInterface extends TransactionInterface
{
    /**
     * The source wallet of the transaction
     *
     * @return WalletInterface
     */
    public function getSourceWallet(): WalletInterface;
}
