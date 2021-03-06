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

use CoiSA\Wallet\ValueInterface;

/**
 * Interface TransactionInterface
 *
 * After created a transaction should always be immutable
 *
 * @package CoiSA\Wallet\Transaction
 */
interface TransactionInterface
{
    /**
     * A unique transaction identifier (e.g. UUID)
     *
     * @return string
     */
    public function getTransactionId(): string;

    /**
     * The time of this transaction
     *
     * @return \DateTimeImmutable
     */
    public function getTransactionTime(): \DateTimeImmutable;

    /**
     * A transaction human readable description identifier
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * The transaction value object instance
     *
     * @return ValueInterface
     */
    public function getValue(): ValueInterface;
}
