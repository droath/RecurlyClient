Recurly Client
================

[![Build Status](https://travis-ci.org/droath/RecurlyClient.svg?branch=master)](https://travis-ci.org/droath/RecurlyClient)

The Recurly Client library allows you to simply interact with the exposed RESTful API Services provided by [Recurly.com](https://recurly.com/).

We're using the PHP Guzzle library to construct the HTTP requests for the available Recurly web services. This will give us the opportunity to leverage Guzzle and its pluggable HTTP adapters. Hopefully it will make for a more feature rich experience when handling the Recurly web services.

## Requirements

The PHP library depends on PHP 5.4 or higher.

## Installation

### Composer

If you're using [Composer](http://getcomposer.org/), you can simply add a dependency `droath/recurly_client` to your project's composer.json file. Here's a snippet of the composer.json.

    {
        "require": {
            "droath/recurly_client": "*"
        }
    }

## Usage

### Configuration
Set the Recurly API key and subdomain, which are defined within your [Recurly Account](https://app.recurly.com/login).

```php
<?php

$config = new \RecurlyClient\Config(
    'abcdef01234567890abcdef01234567890',
    'your-subdomain'
);
$client = new \RecurlyClient\Client($config);
```
### Service Manager

#### Request types
Display the available request types for a particular Recurly service.

```php
<?php
...

$service = new \RecurlyClient\Service\Account();
$manager = new \RecurlyClient\ServiceManager($client, $service);

$request_types = $manager->getRequestTypes();

print $request_types;

```
#### Invoke
Display the Recurly response object based on the invoked request type action.

```php
<?php
...

$service = new \RecurlyClient\Service\Account();
$manager = new \RecurlyClient\ServiceManager($client, $service);

try {
    $response = $manager->invoke('list')->execute();
} catch (Exception $e) {
    // Handle errors here
}

print $response;
```

###  Response

#### Extract
Simply extract the data that was retrieved from the Recurly web service. The data can be extracted from the response in the following formats:  Array, JSON, or XML.

```php
<?php
...

try {
    $response = $manager->invoke('list')->execute();
} catch (Exception $e) {
    // Handle errors here
}

// Available formats are: array, json, xml.
$data = $response->getData()->extract('array');
```
