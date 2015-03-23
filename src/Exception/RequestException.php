<?php

namespace RecurlyClient\Exception;

use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class RequestException extends \RecurlyClient\Exception\Exception
{
    protected $request;
    protected $response;

    public function __construct(
        $message,
        Request $request,
        Response $response,
        \Exception $previous = null
    ) {
        $code = $response && !($response instanceof FutureInterface)
            ? $response->getStatusCode()
            : 0;
        parent::__construct($message, $code, $previous);
        $this->request  = $request;
        $this->response = $response;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getResponse()
    {
        return $this->response;
    }
}
