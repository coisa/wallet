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
