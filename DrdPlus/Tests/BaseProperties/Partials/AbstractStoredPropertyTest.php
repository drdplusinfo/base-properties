<?php
declare(strict_types=1);

namespace DrdPlus\Tests\BaseProperties\Partials;

use DrdPlus\Codes\Properties\PropertyCode;

abstract class AbstractStoredPropertyTest extends AbstractSimplePropertyTest
{
    protected function getExpectedCodeClass(): string
    {
        return PropertyCode::class;
    }
}