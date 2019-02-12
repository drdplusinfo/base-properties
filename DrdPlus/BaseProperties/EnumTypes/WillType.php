<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class WillType extends IntegerEnumType
{
    public const WILL = PropertyCode::WILL;

    public function getName(): string
    {
        return self::WILL;
    }
}