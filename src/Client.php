<?php

namespace RecurlyClient;

class Client
{
    /**
     * Guzzle client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * HTTP client configurations.
     *
     * @var \RecurlyClient\Config
     */
    protected $config;

    /**
     * HTTP client request options.
     *
     * @var array
     */
    protected $options;

    /**
     * Define the base URL format.
     */
    const BASE_URL_FORMAT = 'https://%s.recurly.com';

    /**
     * Setup the client object.
     */
    public function __construct(\RecurlyClient\Config $config)
    {
        $this->config = $config;
        $this->client = new \GuzzleHttp\Client(
            [
                'base_url' => [
                    $this->getHttpBaseUrl() . '/{version}', [
                        'version' => $this->config->getVersion()
                    ]
                ]
            ]
        );
    }

    /**
     * Build the HTTP request.
     *
     * @param string $method  Request method.
     * @param array  $options Request options.
     *
     * @return \GuzzleHttp\Message\Request
     */
    public function buildRequest($method, array $options = [])
    {
        $this->setOptions($options);
        return $this->client->createRequest($method, null, $this->options);
    }

    /**
     * Send the HTTP request.
     *
     * @param \GuzzleHttp\Message\Request $request
     *
     * @return \GuzzleHttp\Message\Response
     * @throws \RecurlyClient\Exception\RequestException
     */
    public function send(\GuzzleHttp\Message\Request $request)
    {
        try {
            $response = $this->client->send($request);
        } catch (\Exception $e) {
            throw new \RecurlyClient\Exception\RequestException(
                $e->getMessage(),
                $request,
                $response,
                $e
            );
        }

        return $response;
    }

    /**
     * Set the HTTP client emitter subscriber.
     *
     * @return self
     */
    public function setHttpEmitterSubscriber(\GuzzleHttp\Event\SubscriberInterface $subscriber)
    {
        $this->client->getEmitter()->attach($subscriber);

        return $this;
    }

    /**
     * Get the HTTP client configurations.
     *
     * @return \RecurlyClient\Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function http()
    {
        return $this->client;
    }

    /**
     * Set the HTTP client default options.
     *
     * @param array $options An array of options to send.
     */
    private function setOptions(array $options)
    {
        $default['headers'] = [
            'Accept'        => 'application/xml',
            'Content-Type'  => 'application/xml; charset=utf-8',
            'Authorization' => base64_encode($this->config->getApiKey())
        ];
        $this->options = array_merge_recursive($default, $options);
    }

    /**
     * Retrieve the HTTP client base URL.
     *
     * @return string
     */
    private function getHttpBaseUrl()
    {
        return sprintf(self::BASE_URL_FORMAT, $this->config->getSubdomain());
    }
}
