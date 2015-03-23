<?php

namespace RecurlyClient;

class ServiceManager
{
    /**
     * Recurly service.
     *
     * @var \RecurlyClient\ServiceInterface
     */
    protected $service;

    /**
     * Setup the service manager.
     *
     * @param \RecurlyClient\Client           $client  A recurly client.
     * @param \RecurlyClient\ServiceInterface $service A recurly service.
     */
    public function __construct(\RecurlyClient\Client $client, \RecurlyClient\ServiceInterface $service)
    {
        $this->service = $service;
        $this->service->register();
        $this->service->setClient($client);
    }

    /**
     * Invoke the service action.
     *
     * @param string $action An service action.
     * @param array  $paths  An array of request paths.
     *
     * @return \RecurlyClient\Message\Request
     */
    public function invoke($action, $paths = [])
    {
        return new \RecurlyClient\Message\Request(
            $this->getRequestType($action)->setPaths($paths)
        );
    }

    /**
     * Get the service request types.
     *
     * @return array
     */
    public function getRequestTypes()
    {
        return $this->service->getRequestTypes();
    }

    /**
     * Get the service request type.
     *
     * @param string $action An service action.
     *
     * @return \RecurlyClient\Message\RequestType
     * @throws \RecurlyClient\Exception\RequestTypeException
     */
    public function getRequestType($action)
    {
        try {
            $type = $this->service->getRequestType($action);
        } catch (\Exception $e) {
            throw new \RecurlyClient\Exception\RequestTypeException(
                $e->getMessage()
            );
        }

        return $type;
    }
}
