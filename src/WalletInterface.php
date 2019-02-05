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
     * If the implementation don't rely on currencies this method MUST return null.
     *
     * @return CurrencyInterface|null
     */
    public function getCurrency(): ?CurrencyInterface;

    /**
     * The current balance of this wallet
     *
     * If a currency was provided for this wallet this method MUST return
     *  a CurrencyValueInterface instead.
     *
     * @return ValueInterface
     */
    public function getBalance(): ValueInterface;

    /**
     * Attach a transaction to the wallet
     *
     * If a transaction with a currency associated was given to an empty wallet
     *   that has no currency associated, it MAY convert the wallet to the
     *   same currency as the transaction.
     *
     * If a given transaction not share the same currency as the wallet,
     *   this method MUST throw a CurrencyExceptionInterface.
     *
     * This method SHOULD NOT automatically convert any transaction value
     *   before attach to the wallet.
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
     * @return \Iterator It MUST return only TransactionInterface for each iterated value
     */
    public function getTransactions(): \Iterator;
}
