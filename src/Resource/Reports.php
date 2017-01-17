<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Reports extends Resource
{
    protected $path = '/reports';

    protected $fields = array(
        'merchant_id' => array(
            'type' => 'string',
            'required' => true,
        ),
        'date_from' => array(
            'type' => 'string',
            'format' => '',
            'required' => true,
        ),
        'date_to' => array(
            'type' => 'string',
            'format' => '',
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