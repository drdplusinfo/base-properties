<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class AgilityType extends IntegerEnumType
{
    public const AGILITY = PropertyCode::AGILITY;

    public function getName(): string
    {
        return self::AGILITY;
    }
}