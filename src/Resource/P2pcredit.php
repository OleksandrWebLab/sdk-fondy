<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class P2pcredit extends Resource
{
    protected $path = '/p2pcredit';

    protected $defaultParams = array();

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
        'receiver_card_number' => array(
            'type' => 'string',
            'required' => false
        ),
        'receiver_rectoken' => array(
            'type' => 'string',
            'required' => false,
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