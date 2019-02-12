<?php
declare(strict_types=1);

namespace DrdPlus\BaseProperties\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;
use DrdPlus\Codes\Properties\PropertyCode;

class CharismaType extends IntegerEnumType
{
    public const CHARISMA = PropertyCode::CHARISMA;

    public function getName(): string
    {
        return self::CHARISMA;
    }
}