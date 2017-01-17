<?php namespace PopcornPHP\Fondy\Resource;

use PopcornPHP\Fondy\Resource;

class Pcidss extends Resource
{
    protected $path = '/3dsecure_step1';

    protected $fields = array(
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
            'type' => 'datetime',
            'required' => true,
        ),
        'card_number' => array(
            'type' => 'creditcard',
            'required' => true,
        ),
        'cvv2' => array(
            'type' => 'cvv',
            'required' => true,
        ),
        'expiry_date' => array(
            'type' => 'datetime',
            'required' => true,
        )
    );

    public function acsRedirect()
    {
        $response = $this->response;
        if (!$response->acs_url) return false;
        $data = array(
            'PaReq' => $response->pareq,
            'MD' => $response->md,
            'TermUrl' => $this->getParam('response_url')
        );
        $html = "<html><body><form id='form' action='$response->acs_url' method='post'>";
        foreach ($data as $key => $value)
            $html .= "<input type='hidden' name='$key' value='$value'>";
        $html .= "</form><script>document.getElementById('form').submit();</script>";
        $html .= "</body></html>";
        exit($html);
    }
}