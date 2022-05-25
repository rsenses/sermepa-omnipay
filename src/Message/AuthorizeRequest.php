<?php

namespace Omnipay\Redsys\Message;

/**
 * Redsys (Redsys) Authorize Request
 *
 * @author Nerburish <nerburish@gmail.com>
 */
class AuthorizeRequest extends PurchaseRequest
{
    public function getTransactionType()
    {
        return '1';
    }
}
