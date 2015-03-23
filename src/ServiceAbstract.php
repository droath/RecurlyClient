<?php

namespace RecurlyClient;

abstract class ServiceAbstract
{
    /**
     * Service client.
     *
     * @var \RecurlyClient\Client
     */
    protected $client;

    /**
     * Service unique identifier.
     *
     * @var string
     */
    protected $identifier;

    /**
     * Services request types.
     *
     * @var array
     */
    protected $requestTypes;

    /**
     * Retrieve the service unique identifier.
     *
     * @return string
     */
    public function identifier()
    {
        return $this->identifier;
    }

    /**
     * Set the service unique identifier.
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Retrieve the client.
     *
     * @return \RecurlyClient\Client
     */
    public function client()
    {
        return $this->client;
    }

    /**
     * Set the service client.
     *
     * @param \RecurlyClient\Client $client A recurly client.
     *
     * @return self
     */
    public function setClient(\RecurlyClient\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Retrieve the service request type by action.
     *
     * @param string $action An request type action name.
     *
     * @return \RecurlyClient\Message\RequestType
     * @throws \RecurlyClient\Exception\InvalidArgumentException
     */
    public function getRequestType($action)
    {
        if (!isset($this->requestTypes[$action])) {
            throw new \RecurlyClient\Exception\InvalidArgumentException(
                sprintf("The request type '%s' wasn't found.", $action),
                404
            );
        }

        return $this->requestTypes[$action];
    }

    /**
     * Retrieve the service request types.
     *
     * @return array
     */
    public function getRequestTypes()
    {
        return !empty($this->requestTypes) ? $this->requestTypes : [];
    }

    /**
     * Set the service request types.
     *
     * @param array $types
     */
    protected function setRequestTypes(array $types)
    {
        foreach ($types as $type) {
            $action = $type->getAction();

            if (!$type instanceof \RecurlyClient\Message\RequestType ||
                isset($this->requestTypes[$action])) {
                continue;
            }
            $type->setService($this);
            $this->requestTypes[$action] = $type;
        }

        return $this;
    }
}
