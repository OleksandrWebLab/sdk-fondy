<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class PcidssConfirm extends Resource
{
    protected $path = '/3dsecure_step2';

    protected $fields = array(
        'order_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'merchant_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'pares' => array(
            'type' => 'string',
            'required' => true,
        ),
        'md' => array(
            'type' => 'string',
            'required' => true,
        ),
        'version' => array(
            'type' => 'cvv',
            'required' => false,
        ),
        'signature' => array(
            'type' => 'string',
            'required' => true,
        ),
    );
}