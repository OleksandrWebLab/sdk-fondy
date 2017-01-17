<?php namespace PopcornPHP\Fondy;

use \Exception;

class Error extends Exception
{
    public static function handleException(Exception $e)
    {
        error_log($e->getMessage());

        $msg = sprintf('<h1>Ipsp PHP Error</h1>' .
            '<h3>%s (%s)</h3>' .
            '<pre>%s</pre>',
            $e->getMessage(),
            $e->getCode(),
            $e->getTraceAsString()
        );

        exit($msg);
    }
}