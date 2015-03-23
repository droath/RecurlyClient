<?php

namespace RecurlyClient;

class Config
{

    /**
     * Recurly API key.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Recurly API subdomain
     *
     * @var string
     */
    protected $subdomain;

    /**
     * Recurly API version
     *
     * @var integer
     */
    protected $version;

    /**
     * Setup the Recurly configurations.
     */
    public function __construct($api_key, $subdomain, $version = 2)
    {
        $this->apiKey    = $api_key;
        $this->subdomain = $subdomain;
        $this->version   = $version;
    }

    /**
     * Get the Recurly API key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Get the Recurly API version.
     *
     * @return string
     */
    public function getVersion()
    {
        return 'v' . $this->version;
    }

    /**
     * Get the Recurly API subdomain.
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }
}
