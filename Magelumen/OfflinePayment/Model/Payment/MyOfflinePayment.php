<?php
declare(strict_types=1);

namespace Magelumen\OfflinePayment\Model\Payment;

class MyOfflinePayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "myofflinepayment";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}

