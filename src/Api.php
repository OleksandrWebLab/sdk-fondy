<?php namespace PopcornPHP\Fondy;

use \Exception;
use \ErrorException;

class Api
{
    private $client;
    private $params = array();

    /**
     * Supported currencies
     */
    const UAH = 'UAH';
    const USD = 'USD';
    const EUR = 'EUR';
    const RUB = 'RUB';
    const GBP = 'GBP';

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;

        set_error_handler('\PopcornPHP\Fondy\Error::handleException');
        set_exception_handler('\PopcornPHP\Fondy\Error::handleException');
    }

    /**
     * @param $name
     * @return bool
     */
    public function initResource($name)
    {
        $class = 'PopcornPHP\\Fondy\\Resource\\' . ucfirst($name);

        if (!class_exists($class)) {
            new Exception(sprintf('ipsp resource "%s" not found', $class));
        }

        $resource = new $class;

        return $resource;
    }

    /**
     * @param null $name
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function call($name = NULL, $params = array())
    {
        $resource = $this->initResource($name);
        $resource->setClient($this->client);

        return $resource->call(array_merge($this->params, $params));
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setParam($key = '', $value = '')
    {
        $this->params[$key] = $value;
    }

    public function getParam($key = '')
    {
        $this->params[$key];
    }

    /**
     * @param $errno
     * @param $errstr
     * @param $errfile
     * @param $errline
     * @throws ErrorException
     */
    public function handleError($errno, $errstr, $errfile, $errline)
    {
        throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
    }

    public function hasAcsData()
    {
        return isset($_POST['MD']) AND isset($_POST['PaRes']);
    }

    public function hasResponseData()
    {
        return isset($_POST['response_status']);
    }

    public function success($callback)
    {

    }

    public function failure($callback)
    {

    }
}