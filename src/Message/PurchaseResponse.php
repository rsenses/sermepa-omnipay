<?php

namespace Omnipay\Redsys\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * Redsys (Redsys) Purchase Response
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isRedirect()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getRedirectMethod()
    {
        return 'POST';
    }

    /**
     * @return array|mixed
     */
    public function getRedirectData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->getRequest()->getEndpoint();
    }
}
