<?php

namespace RecurlyClient\Test\Fixture;

final class RecurlyCleintEntities
{
    public static function account()
    {
        $entity = new \RecurlyClient\Entity\Account();
        $entity->setAccountCode(1);
        $entity->setEmail('verena@example.com');
        $entity->setFirstName('verena');
        $entity->setLastName('example');

        return $entity;
    }

    public static function adjustment()
    {
        $entity = new \RecurlyClient\Entity\Adjustment();
        $entity->setUnitAmountInCents(5000);
        $entity->setDescription('Charge for extra bandwidth');
        $entity->setCurrency('USD');
        $entity->setQuantity(1);
        $entity->setAccountingCode('bandwidth');
        $entity->setTaxExempt('false');

        return $entity;
    }
}
