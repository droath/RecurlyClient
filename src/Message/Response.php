<?php

namespace RecurlyClient\Message;

class Response
{
    /**
     * Recurly request.
     *
     * @var \RecurlyClient\Message\Request
     */
    protected $request;

    /**
     * Guzzle response.
     *
     * @var \GuzzleHttp\Message\Response
     */
    protected $response;

    /**
     * Setup the recurly response class.
     *
     * @param \GuzzleHttp\Message\Response $response
     */
    public function __construct(
        \RecurlyClient\Message\Request $request,
        \GuzzleHttp\Message\Response $response
    ) {
        $this->request  = $request;
        $this->response = $response;
    }

    /**
     * Set the Guzzle response.
     *
     * @param \GuzzleHttp\Message\Response $response A request response.
     */
    public function setResponse(\GuzzleHttp\Message\Response $response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Retrieve the Recurly request.
     *
     * @return \RecurlyClient\Message\Request
     */
    public function getRequest()
    {
        return $this->request;
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
     * Determine if the response was successful.
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return (boolean) $this->getRequest()->getType()
            ->getExpectedCode() == $this->getStatusCode();
    }

    /**
     * Retrieve the response data object.
     *
     * @return \RecurlyClient\Format\ResponseData
     * @throws \RecurlyClient\Exception\ResponseException
     */
    public function getData()
    {
        $response = $this->getResponse();
        try {
            $xml = $response->xml();
        } catch (\Exception $e) {
            throw new \RecurlyClient\Exception\ResponseException(
                $e->getMessage(),
                $response,
                $e
            );
        }

        return new \RecurlyClient\Message\ResponseData($xml);
    }
}
