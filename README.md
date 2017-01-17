# IPSP SDK Fondy

## Payment service provider
A payment service provider (PSP) offers shops online services for accepting electronic payments by a variety of payment methods including credit card, bank-based payments such as direct debit, bank transfer, and real-time bank transfer based on online banking. Typically, they use a software as a service model and form a single payment gateway for their clients (merchants) to multiple payment methods. 
[read more](https://en.wikipedia.org/wiki/Payment_service_provider)

## Source code
https://github.com/cloudipsp/ipsp-php

## Installation
```cmd
composer require popcornphp/sdk-fondy
```

## Quick Start
```php
<?php

require_once 'vendor/autoload.php';

use PopcornPHP\Fondy\Client;

define('HOST', $_SERVER['HTTP_HOST']);
define('MERCHANT_ID', 1396424);
define('MERCHANT_PASSWORD', 'test');
define('GATEWAY', 'api.fondy.eu');
define('ORDER_ID', 'test_order_' . rand(0, 10000));

$client = new Client(MERCHANT_ID, MERCHANT_PASSWORD, GATEWAY);
```

## Generate Checkout
```php
<?php

use PopcornPHP\Fondy\Api;

$api = new Api($client);

$data = $api->call('checkout', array(
    'order_id' => ORDER_ID,
    'order_desc' => 'Short Order Description',
    'currency' => $api::UAH,
    'amount' => 20 * 100, // 20 UAH
    'response_url' => sprintf('http://%s/response.php?order_id=%s', HOST, ORDER_ID),
    'server_callback_url' => sprintf('http://%s/callback.php', HOST),
))->getResponse();
```

## API Methods
### Accept purchase (hosted payment page)
```php
$data = $api->call('checkout',array());
```
### Accept purchase (merchant payment page)
```php
$data = $api->call('pcidss',array());
```
### Purchase using card token
```php
$data = $api->call('recurring',array());
```
### Payment report
```php
$data = $api->call('reports',array());
```
### Order Refund
```php
$data = $api->call('reverse',array());
```
### Check payment status
```php
$data = $api->call('status',array());
```
### Card verification
```php
$data = $api->call('verification',array());
```
### Order capture
```php
$data = $api->call('capture',array());
```
### P2P card credit
```php
$data = $api->call('p2pcredit',array());
```