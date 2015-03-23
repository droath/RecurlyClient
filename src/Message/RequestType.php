<?php

namespace RecurlyClient\Message;

class RequestType
{
    /**
     * Request type method.
     *
     * @var string
     */
    protected $method;

    /**
     * Request type action.
     *
     * @var string
     */
    protected $action;

    /**
     * Request type paths.
     *
     * @var array
     */
    protected $paths;

    /**
     * Request type service.
     *
     * @var \RecurlyClient\ServiceAbstract
     */
    protected $service;

    /**
     * Setup request type.
     *
     * @param string $action The request action.
     * @param string $method The request method.
     * @param array  $paths  The request paths.
     */
    public function __construct($action, $method = null, array $paths = [])
    {
        $this->action = $action;
        $this->method = $method;
        $this->paths  = $paths;
    }

    /**
     * Set the request paths.
     *
     * @param array $paths
     *
     * @return self
     */
    public function setPaths(array $paths)
    {
        $this->paths = array_merge($this->paths, $paths);

        return $this;
    }

    /**
     * Set the request type service.
     *
     * @param \RecurlyClient\ServiceAbstract $service
     *
     * @return self
     */
    public function setService(\RecurlyClient\ServiceAbstract $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Retrieve the request type action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Retrieve the request type method.
     *
     * @return string
     */
    public function getMethod()
    {
        return !empty($this->method) ? $this->method : 'GET';
    }

    /**
     * Retrieve the request type paths.
     *
     * @return array
     */
    public function getPaths()
    {
        return !empty($this->paths) ? $this->paths : [];
    }

    /**
     * Retrieve the request type service.
     *
     * @return \RecurlyClient\ServiceAbstract
     */
    public function service()
    {
        return $this->service;
    }

    /**
     * Retrieve the full request path.
     *
     * @return string
     * @throws \RecurlyClient\Exception\MissingArgumentException
     */
    public function getFullPath()
    {
        $paths = $this->getPaths();

        $key = array_search(':id', $paths);
        if (false !== $key) {
            $identifier = $this->service->identifier();

            if (null === $identifier) {
                throw new \RecurlyClient\Exception\MissingArgumentException(
                    'Service identifier is required.'
                );
            }
            $paths[$key] = $identifier;
        }

        return implode('/', array_merge($this->service->basePath(), $paths));
    }
}
