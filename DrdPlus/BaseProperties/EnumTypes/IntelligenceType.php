<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class IntelligenceType extends IntegerEnumType
{
    public const INTELLIGENCE = PropertyCode::INTELLIGENCE;

    public function getName(): string
    {
        return self::INTELLIGENCE;
    }
}