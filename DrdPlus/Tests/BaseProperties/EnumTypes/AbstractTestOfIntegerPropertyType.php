<?php
declare(strict_types=1);

namespace DrdPlus\Tests\BaseProperties\EnumTypes;

abstract class AbstractTestOfIntegerPropertyType extends AbstractTestOfPropertyType
{
    protected function getValue()
    {
        return 12345;
    }

}
