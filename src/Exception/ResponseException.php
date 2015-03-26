<?php

namespace RecurlyClient\Exception;

use GuzzleHttp\Message\Response;

class ResponseException extends \RecurlyClient\Exception\Exception
{
    protected $response;

    public function __construct(
        $message,
        Response $response,
        \Exception $previous = null
    ) {
        $code = !is_null($previous) ?
            $previous->getCode() : 0;

        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }
}
