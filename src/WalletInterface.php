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
     * @return CurrencyInterface
     */
    public function getCurrency(): CurrencyInterface;

    /**
     * The current balance of this wallet
     *
     * If this is an empty wallet with no transactions it SHOULD return null instead of a CurrencyValueInterface.
     *
     * @return ValueInterface
     */
    public function getBalance(): ?ValueInterface;

    /**
     * Attach a transaction to the wallet
     *
     * If a transaction have a different currency it SHOULD throw an CurrencyExceptionInterface.
     *
     * @param TransactionInterface $transaction
     *
     * @throws CurrencyExceptionInterface When the given transaction not share the same currency as the wallet
     *
     * @return void
     */
    public function addTransaction(TransactionInterface $transaction): void;
}
