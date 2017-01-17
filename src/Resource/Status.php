<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Status extends Resource
{
    protected $path = '/status/order_id';

    protected $fields = array(
        'order_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'merchant_id' => array(
            'type' => 'string',
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