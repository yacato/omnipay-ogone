<?php

namespace Omnipay\Ogone\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getData() {
        $data = [
            'PSPID' => $this->getPSPID(),
            'USERID' => $this->getUserId(),
            'PSWD' => $this->getPassword(),
            'ORDERID' => $this->getOrderId(),
            'AMOUNT' => $this->getAmount(),
            'CURRENCY' => $this->getCurrency(),
            'CARDNO' => $this->getCardNo(),
            'ED' => $this->getEd(),
            'OPERATION' => $this->getOperation(),
            'ECOM_CONSUMERID' => $this->getEcomConsumerId(),
        ];
        
        $this->sendData($data);
    }
    
    
    public function getCardNo() {
        return $this->getParameter('card_no');
    }
    
    public function setCardNo($value) {
        return $this->setParameter('card_no', $value);
    }
    
    public function getED() {
        return $this->getParameter('ed');
    }
    
    public function setED($value) {
        return $this->setParameter('ed', $value);
    }
}
