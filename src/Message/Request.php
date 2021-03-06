<?php

namespace RecurlyClient\Message;

class Request
{
    /**
     * Request type.
     *
     * @var \RecurlyClient\Message\RequestType
     */
    protected $type;

    /**
     * Request options.
     *
     * @var array
     */
    protected $options;

    /**
     * Setup the service request.
     *
     * @param \RecurlyClient\Message\type $type A service request type.
     */
    public function __construct(\RecurlyClient\Message\RequestType $type)
    {
        $this->type = $type;
    }

    /**
     * Execute the service request type.
     *
     * @param entity $entity The request object to POST.
     * @param array  $query  An array of query parameters.
     *
     * @return \RecurlyClient\Message\Response
     */
    public function execute($entity = null, array $query = [])
    {
        $this->setBody($entity);
        $this->setQuery($query);

        $response = $this->client()->send(
            $this->request()
        );

        return new \RecurlyClient\Message\Response($this, $response);
    }

    /**
     * Get the request type.
     *
     * @return \RecurlyClient\Message\RequestType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set valid request option.
     *
     * @param string $key   Request option key.
     * @param mixed  $value Request option value.
     *
     * @return self
     * @throws \RecurlyClient\Exception\InvalidArgumentException
     */
    public function option($key, $value)
    {
        if (null === $key || null === $value) {
            throw new \RecurlyClient\Exception\InvalidArgumentException(
                'Either a key or value or both arguments were null.'
            );
        }
        $this->options[$key] = $value;

        return $this;
    }

    /**
     * Get the request options.
     *
     * @return array
     */
    public function getOptions()
    {
        return !empty($this->options) ? $this->options : [];
    }

    /**
     * Set the request query option.
     *
     * @param array $query An array of query parameters.
     *
     * @return self
     */
    protected function setQuery(array $query)
    {
        $this->option('query', $query);

        return $this;
    }

    /**
     * Set the request body option.
     *
     * @param entity $entity An entity object.
     *
     * @return self
     * @throws \RecurlyClient\Exception\InvalidArgumentException
     */
    protected function setBody($entity)
    {
        if (null === $entity) {
            return $this;
        }

        if (! $entity instanceof \RecurlyClient\Entity\EntityAbstract) {
            throw new \RecurlyClient\Exception\InvalidArgumentException(
                'Invalid entity object was given.'
            );
        }
        $this->option('body', $entity->serialize());

        return $this;
    }

    /**
     * Get the request type service.
     *
     * @return \RecurlyClient\ServiceAbstract
     */
    protected function service()
    {
        return $this->type->service();
    }

    /**
     * Get the service client.
     *
     * @return \RecurlyClient\Client
     */
    protected function client()
    {
        return $this->service()->client();
    }

    /**
     * Get the HTTP request.
     *
     * @return \GuzzleHttp\Message\Request
     */
    protected function request()
    {
        $request = $this->client()
            ->buildRequest($this->type->getMethod(), $this->options);

        $request->setPath($request->getPath() . '/' . $this->type->getFullPath());

        return $request;
    }
}
