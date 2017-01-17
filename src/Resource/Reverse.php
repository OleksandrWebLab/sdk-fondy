<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Reverse extends Resource
{
    protected $path = '/reverse/order_id';

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