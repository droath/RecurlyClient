<?php

namespace RecurlyClient;

interface ServiceInterface
{
    /**
     * Register the service request types.
     *
     * @return self
     */
    public function register();

    /**
     * Define the base paths needed for service request.
     *
     * @return array
     */
    public function basePath();
}
