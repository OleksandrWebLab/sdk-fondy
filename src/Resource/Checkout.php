<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Checkout extends Resource
{
    protected $path = '/checkout/url';

    protected $fields = array(
        'merchant_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'order_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'order_desc' => array(
            'type' => 'string',
            'required' => true,
        ),
        'currency' => array(
            'type' => 'string',
            'required' => true,
        ),
        'amount' => array(
            'type' => 'integer',
            'required' => true,
        ),
        'signature' => array(
            'type' => 'string',
            'required' => true,
        ),
    );

    public function redirectToCheckout()
    {
        $this->getResponse()->redirectTo('checkout_url');
    }
}