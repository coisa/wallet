<?php

namespace CoiSA\Wallet;

use CoiSA\Wallet\Currency\CurrencyInterface;
use CoiSA\Wallet\Currency\CurrencyExceptionInterface;
use CoiSA\Wallet\Transaction\TransactionInterface;

/**
 * Interface WalletInterface
 *
 * @package CoiSA\Wallet
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
     * If you don't want use currencies, you MAY implement only ValueInterface instead.
     * If the implementation don't rely on currencies this method SHOULD return null.
     *
     * @return CurrencyInterface|null
     */
    public function getCurrency(): ?CurrencyInterface;

    /**
     * The current balance of this wallet
     *
     * If this is an empty wallet with no transactions it SHOULD return
     *   null instead of a ValueInterface.
     *
     * If a currency was provided for this wallet this method SHOULD return
     *  a CurrencyValueInterface instead.
     *
     * @return ValueInterface
     */
    public function getBalance(): ?ValueInterface;

    /**
     * Attach a transaction to the wallet
     *
     * If no currency was provided for the wallet and the given
     *   transaction has a currency associated, it SHOULD convert the wallet to
     *   the same currency as the transaction.
     *
     * If a transaction with no currency associated was given, and the wallet
     *   have a currency associated, it SHOULD convert the transaction to
     *   the same currency as the wallet before attach.
     *
     * If a currency was provided for the wallet and the transaction have
     *   a different currency it SHOULD throw an CurrencyExceptionInterface.
     *
     * @param TransactionInterface $transaction
     *
     * @throws CurrencyExceptionInterface When the given transaction not
     *   share the same currency as the wallet
     *
     * @return void
     */
    public function addTransaction(TransactionInterface $transaction): void;

    /**
     * Returns a list of attached transactions of this wallet
     *
     * @return \Iterator It SHOULD return only TransactionInterface for each iterated value
     */
    public function getTransactions(): \Iterator;
}
