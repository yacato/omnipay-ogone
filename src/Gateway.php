<?php

namespace Omnipay\Ogone;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Ogone';
    }
    
    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return [
            'testMode' => true,
            'apiMerchantId' => '',
            'apiKeyId' => '',
            'apiSecret' => '',
            'apiVersion' => 'v1',
            'apiIntegrator' => null,
        ];
    }
    
    /**
     * Generally can only be called up to 24 hours after submitting a transaction
     * @param  array  $options
     */
    public function void(array $options = [])
    {
        // TODO: Implement void() method.
    }
    
    /**
     * Authorize an amount on the customer’s card.
     *
     * @param  array  $options
     * @return mixed
     */
    public function authorize(array $options = [])
    {
    
    }
    
    /**
     * Confirm Authorize Method
     *
     * @param  array  $options
     */
    public function completeAuthorize(array $options = [])
    {
        // TODO: Implement completeAuthorize() method.
    }
    
    /**
     * Authorize and immediately capture an amount on the customer’s card (Parayı Hemen Çeker)
     *
     * @param  array  $options
     * @return mixed
     */
    public function purchase(array $options = [])
    {
        return $this->createRequest('\Omnipay\Ogone\Message\PurchaseRequest', $options);
    }
    
    /**
     * Confirm Purchase Method
     *
     * @param  array  $options
     */
    public function completePurchase(array $options = [])
    {
        // TODO: Implement completePurchase() method.
    }
    
    /**
     * Capture an amount you have previously authorized.
     *
     * @param  array  $options
     */
    public function capture(array $options = [])
    {
        // TODO: Implement capture() method.
    }
    
    /**
     * Refund an already processed transaction
     *
     * @param  array  $options
     */
    public function refund(array $options = [])
    {
        // TODO: Implement refund() method.
    }
    
    /**
     * Create Credit Card (We don't use)
     *
     * @param  array  $options
     */
    public function createCard(array $options = [])
    {
        // TODO: Implement createCard() method.
    }
    
    /**
     * Update Credit Card (We don't use)
     *
     * @param  array  $options
     */
    public function updateCard(array $options = [])
    {
        // TODO: Implement updateCard() method.
    }
    
    /**
     * Delete Credit Card (We don't use)
     *
     * @param  array  $options
     */
    public function deleteCard(array $options = [])
    {
        // TODO: Implement deleteCard() method.
    }
    
}
