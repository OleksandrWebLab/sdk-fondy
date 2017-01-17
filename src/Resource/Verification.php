<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Verification extends Resource
{
    protected $path = '/checkout/url';

    protected $defaultParams = array(
        'verification' => 'y',
        'verification_type' => 'code'
    );

    protected $fields = array(
        'merchant_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'order_id' => array(
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
        'verification' => array(
            'type' => 'string',
            'equal' => 'y'
        ),
        'verification_type' => array(
            'type' => 'string',
            'equal' => 'y',
            'required' => true,
        ),
        'signature' => array(
            'type' => 'string',
            'required' => true,
        ),
        'version' => array(
            'type' => 'string',
            'required' => false,
        ),
    );
}