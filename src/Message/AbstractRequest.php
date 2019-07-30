<?php

namespace Omnipay\Ogone\Message;

use Omnipay\Common\Message\AbstractRequest as CommonAbstractRequest;

abstract class AbstractRequest extends CommonAbstractRequest
{
    public function sendData()
    {
        return 'Gönderildi';
    }
    
    
    public function getPSPID() {
        return $this->getParameter('pspid');
    }
    
    public function setPSPID($value) {
        return $this->setParameter('pspid', $value);
    }
    
    public function getUserId() {
        return $this->getParameter('user_id');
    }
    
    public function setUserId($value) {
        return $this->setParameter('user_id', $value);
    }
    
    public function getPassword() {
        return $this->getParameter('password');
    }
    
    public function setPassword($value) {
        return $this->setParameter('password', $value);
    }
    
    public function getOrderId() {
        return $this->getParameter('order_id');
    }
    
    public function setOrderId($value) {
        return $this->setParameter('order_id', $value);
    }
    
    public function getAmount() {
        return $this->getParameter('amount');
    }
    
    public function setAmount($value) {
        return $this->setParameter('amount', $value);
    }
    
    public function getCurrency() {
        return $this->getParameter('currency');
    }
    
    public function setCurrency($value) {
        return $this->setParameter('currency', $value);
    }
    
    public function getOperation() {
        return $this->getParameter('operation');
    }
    
    public function setOperation($value) {
        return $this->setParameter('operation', $value);
    }
    
    public function getEcomConsumerId() {
        return $this->getParameter('ecom_consumer_id');
    }
    
    public function setEcomConsumerId($value) {
        return $this->setParameter('ecom_consumer_id', $value);
    }
}
