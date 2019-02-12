<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class KnackType extends IntegerEnumType
{
    public const KNACK = PropertyCode::KNACK;

    public function getName(): string
    {
        return self::KNACK;
    }
}