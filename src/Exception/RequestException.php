<?php

namespace RecurlyClient\Exception;

use GuzzleHttp\Message\Request;

class RequestException extends \RecurlyClient\Exception\Exception
{
    protected $request;

    public function __construct(
        $message,
        Request $request,
        \Exception $previous = null
    ) {
        $code = !is_null($previous) ?
            $previous->getCode() : 0;

        parent::__construct($message, $code, $previous);
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}
