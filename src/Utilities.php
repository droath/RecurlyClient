<?php

namespace RecurlyClient;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

final class Utilities
{
    /**
     * Define the default serializer.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function DefaultSerializer()
    {
        $encoders    = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new PropertyNormalizer()];

        return new Serializer($normalizers, $encoders);
    }
}
