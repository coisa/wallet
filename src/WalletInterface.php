<?php

namespace CoiSA\Wallet;

use CoiSA\Wallet\Currency\CurrencyInterface;
use CoiSA\Wallet\Currency\CurrencyExceptionInterface;
use CoiSA\Wallet\Transaction\TransactionInterface;

/**
 * Interface WalletInterface
 */
interface WalletInterface
{
    /**
     * A unique wallet identifier (e.g. UUID)
     *
     * @return string
     */
    public function getWalletId(): string;

    /**
     * The currency of the wallet
     *
     * If the implementation don't rely on currencies it SHOULD return null.
     *
     * @return CurrencyInterface|null
     */
    public function getCurrency(): ?CurrencyInterface;

    /**
     * The current balance of this wallet
     *
     * If this is an empty wallet with no transactions it SHOULD return
     *   null instead of a CurrencyValueInterface.
     *
     * @return ValueInterface
     */
    public function getBalance(): ?ValueInterface;

    /**
     * Attach a transaction to the wallet
     *
     * If a currency was provided and the transaction have a different
     *   currency it SHOULD throw an CurrencyExceptionInterface.
     *
     * If not currency was provided for the wallet and the transaction
     *   given has a CurrencyValueInterface it SHOULD assume that wallet became
     *   of the same currency provided by the transaction.
     *
     * @param TransactionInterface $transaction
     *
     * @throws CurrencyExceptionInterface When the given transaction not
     *   share the same currency as the wallet
     *
     * @return void
     */
    public function addTransaction(TransactionInterface $transaction): void;
}
