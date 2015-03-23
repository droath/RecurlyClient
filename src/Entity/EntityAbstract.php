<?php

namespace RecurlyClient\Entity;

use RecurlyClient\Utilities;
use RecurlyClient\Exception\InvalidArgumentException;

abstract class EntityAbstract
{
    /**
     * Serialize format.
     *
     * @var string
     */
    private $serializeFormat;

    /**
     * Serialize context.
     *
     * @var array
     */
    private $serializeContext;

    /**
     * The entity machine readable name.
     *
     * @return string
     */
    abstract public function name();

    /**
     * Serialize the entity properties.
     *
     * @return mixed
     */
    public function serialize()
    {
        $exclude = array_keys(get_class_vars(__CLASS__));

        // Iterate over the entities set properties.
        $properties = [];
        foreach ($this as $property => $value) {
            if ($value == '' || in_array($property, $exclude)) {
                continue;
            }
            $properties[$property] = $value;
        }
        $format = $this->getSerializeFormat();

        // Set the XML root node to the entity name.
        if ($format == 'xml') {
             $this->setSerializeContext(
                'xml_root_node_name', $this->name()
            );
        }
        $serialize = Utilities::DefaultSerializer();

        return $serialize->serialize($properties, $format, $this->getSerializeContext());
    }

    /**
     * Set the serializer format.
     *
     * @param string $format Either XML or JSON formats are supported.
     */
    public function setSerializeFormat($format)
    {
        if ($format != 'xml' && $format != 'json') {
            throw new InvalidArgumentException(
                'Invalid serialize format argument was defined.'
            );
        }
        $this->serializeFormat = $format;

        return $this;
    }

    /**
     * Set the serialize context.
     *
     * @param string $key   The context key.
     * @param string $value The context value.
     */
    public function setSerializeContext($key, $value)
    {
        if (null === $key || null === $value) {
            throw new InvalidArgumentException(
                'Invalid serialize key/value context was define.'
            );
        }
        $this->serializeContext[$key] = $value;

        return $this;
    }

    /**
     * Retrieve the serialize format.
     *
     * @return string
     */
    private function getSerializeFormat()
    {
        return !empty($this->serializeFormat) ? $this->serializeFormat : 'xml';
    }

    /**
     * Retrieve the serialize context.
     *
     * @return array
     */
    private function getSerializeContext()
    {
        return !empty($this->serializeContext) ? $this->serializeContext : [];
    }
}
