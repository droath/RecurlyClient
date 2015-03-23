<?php

namespace RecurlyClient\Message;

class ResponseData
{
    /**
     * Element object.
     *
     * @var \SimpleXMLElement
     */
    protected $element;

    /**
     * Setup the response data.
     *
     * @param \SimpleXMLElement $element
     */
    public function __construct(\SimpleXMLElement $element)
    {
        $this->element = $element;
    }

    /**
     * Extract response data by given format.
     *
     * @param string $format Either (xml, array, or json) can been specified.
     *
     * @return mixed
     */
    public function extract($format)
    {
        switch (strtolower($format)) {
            case 'xml':
                return $this->asXML();
            case 'array':
                return $this->asArray();
            case 'json':
                return $this->asJson();
            default:
                return $this->element;
        }
    }

    /**
     * Return response data as XML.
     *
     * @return string
     */
    protected function asXML()
    {
        return $this->element->saveXML();
    }

    /**
     * Return response data as array.
     *
     * @return array
     */
    protected function asArray()
    {
        $array    = [];
        $iterator = new \SimpleXMLIterator($this->asXML());

        // Iterate over the XML nodes and build a formated array.
        for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {

            $key     = $iterator->key();
            $element = $iterator->current();

            // Build an array of the current node data. Some limitations due
            // exist since outputting more than an two-dimensional array is
            // not currently supported. We'll need to build a recursive method
            // to help accomplish this task if we experience any issues!
            if ($iterator->hasChildren()) {
                static $index = 0;
                foreach ($iterator->getChildren() as $name => $childIterator) {
                    $array[$key][$index][$name] = trim((string) $childIterator);
                }
                $index++;
            } else {
                $array[$key] = trim((string) $element);
            }
        }

        return $array;
    }

    /**
     * Return response data has JSON.
     *
     * @return string
     */
    protected function asJSON()
    {
        return json_encode($this->asArray());
    }
}
