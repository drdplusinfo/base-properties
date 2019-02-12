<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class StrengthType extends IntegerEnumType
{
    public const STRENGTH = PropertyCode::STRENGTH;

    public function getName(): string
    {
        return self::STRENGTH;
    }
}