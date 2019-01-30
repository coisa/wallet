<?php

namespace CoiSA\Wallet\Transaction;

/**
 * Interface TransferInterface
 *
 * @package CoiSA\Wallet\Transaction
 */
interface TransferInterface extends TransactionInterface
{
    /**
     * The related transfer transaction.
     *
     * This interface is designed to create a link between deposit and withdrawal transaction objects.
     * Objects of this kind SHOULD also implement one of the follow DepositInterface or WithdrawalInterface.
     *
     * @return TransferInterface
     */
    public function getRelatedTransaction(): TransferInterface;
}
