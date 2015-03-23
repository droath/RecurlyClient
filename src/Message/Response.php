<?php

namespace RecurlyClient\Message;

class Response
{
    /**
     * The Guzzle response.
     *
     * @var \GuzzleHttp\Message\Response
     */
    protected $response;

    /**
     * Setup the recurly response class.
     *
     * @param \GuzzleHttp\Message\Response $response
     */
    public function __construct(\GuzzleHttp\Message\Response $response)
    {
        $this->response = $response;
    }

    /**
     * Retrieve the Guzzle response.
     *
     * @return \GuzzleHttp\Message\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Retrieve the response status code.
     *
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->response->getStatusCode();
    }

    /**
     * Retrieve the response reason phrase.
     *
     * @return string
     */
    public function getReasonPhrase()
    {
        return $this->response->getReasonPhrase();
    }

    /**
     * Retrieve the response headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    /**
     * Retrieve the response data object.
     *
     * @return \RecurlyClient\Format\ResponseData
     */
    public function getData()
    {
        $response = $this->getResponse();

        if (!$response instanceof \GuzzleHttp\Message\Response) {
            throw new \Exception('Unknown response object received.');
        }
        $data = $response->xml();

        return new \RecurlyClient\Message\ResponseData($data);
    }
}
